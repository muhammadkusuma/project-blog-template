<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use App\Models\DetailModel;
use App\Models\UserModel;

class Users extends BaseController
{
    /**
     *
     * @var Model
     */
    protected $model;
    protected $userModel;

    public function __construct()
    {
        $this->model = new ArtikelModel();
        $this->helpers = ['form', 'url'];
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $detailweb = new DetailModel(); // definisikan variabel $detailweb
        $data = [
            'detail' => $detailweb->detail(),
            'blog' => 'Users',
            'users' => $this->userModel->findAll() // ambil seluruh data dari tabel 'user
        ];

        return view('dashboard/users', $data);
    }

    public function create()
    {
        $detailweb = new DetailModel(); // definisikan variabel $detailweb
        $data = [
            'detail' => $detailweb->detail(),
            'blog' => 'Tambah Pengguna'
        ];

        return view('dashboard/users/create', $data);
    }

    public function destroy($id)
    {
        if (empty($id)) {
            return redirect()->to(base_url('dashbor/users'));
        }

        $delete = $this->userModel->delete($id);

        if ($delete) {
            session()->setFlashdata('success', 'User has been removed successfully.');
        } else {
            session()->setFlashdata('error', 'Failed to remove user, please try again.');
        }

        return redirect()->to(base_url('dashbor/users'));
    }

    public function store()
    {
        $email = $this->request->getPost('email');

        // Validate email domain
        $allowedDomains = ['gmail.com', 'students.uin-suska.ac.id', 'uin-suska.ac.id'];
        $domain = explode('@', $email)[1];

        if (!in_array($domain, $allowedDomains)) {
            session()->setFlashdata('error', 'Invalid email domain.');
            return redirect()->back();
        }

        // Generate random username
        $username = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 10);

        // Generate random password
        $password = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 10);

        $post = [
            'email' => $email,
            'role_user' => 'admin',
            'username' => $username,
            'password_hash' => password_hash($password, PASSWORD_DEFAULT)
        ];

        $save = $this->userModel->save($post);

        if ($save) {
            session()->setFlashdata('success', 'User has been added successfully.');
            return redirect()->to(base_url('dashbor/users'));
        } else {
            session()->setFlashdata('error', 'Some problems occurred, please try again.');
            return redirect()->back();
        }
    }
}
