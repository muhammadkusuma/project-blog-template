<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Auth extends Controller
{
    public function googleLogin()
    {
        helper('url');
        $client = new \Google_Client();
        $client->setClientId(getenv('GOOGLE_CLIENT_ID'));
        $client->setClientSecret(getenv('GOOGLE_CLIENT_SECRET'));
        $client->setRedirectUri(getenv('GOOGLE_REDIRECT_URI'));
        $client->addScope('email');
        $client->addScope('profile');
        $client->setAccessType('offline');
        $client->setPrompt('select_account consent');
        $client->setIncludeGrantedScopes(true);

        return redirect()->to($client->createAuthUrl());
    }

    public function googleCallback()
    {
        helper('url');
        $client = new \Google_Client();
        $client->setClientId(getenv('GOOGLE_CLIENT_ID'));
        $client->setClientSecret(getenv('GOOGLE_CLIENT_SECRET'));
        $client->setRedirectUri(getenv('GOOGLE_REDIRECT_URI'));
        $client->addScope('email');
        $client->addScope('profile');
        $client->setAccessType('offline');
        $client->setIncludeGrantedScopes(true);

        if ($this->request->getVar('code')) {
            $token = $client->fetchAccessTokenWithAuthCode($this->request->getVar('code'));
            $client->setAccessToken($token);

            if ($client->isAccessTokenExpired()) {
                $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
            }

            $google_oauth = new \Google_Service_Oauth2($client);
            $google_account_info = $google_oauth->userinfo->get();

            // Mengecek apakah email ada dalam database
            $userModel = new UserModel();
            $user = $userModel->getUserByEmail($google_account_info->email);

            if ($user) {
                // Email ditemukan dalam database, lakukan tindakan sesuai kebutuhan
                // Contoh: Simpan informasi ke sesi dan lanjutkan ke dashboard
                session()->set([
                    'nama' => $google_account_info->name,
                    'email' => $google_account_info->email
                ]);

                return redirect()->to('/dashbor');
            } else {
                // Email tidak ditemukan dalam database, lakukan tindakan sesuai kebutuhan
                // Contoh: Tampilkan pesan kesalahan atau mungkin daftarkan pengguna baru
                return redirect()->to('/');
            }
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
