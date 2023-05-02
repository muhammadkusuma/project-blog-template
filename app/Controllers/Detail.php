<?php

namespace App\Controllers;

use App\Models\DetailModel;

class Detail extends BaseController
{
    public function index($id_detail)
    {
        $detailweb = new DetailModel();
        $data['detail'] = $detailweb->detail();
        $data['detailweb'] = $detailweb->getDetailById($id_detail); // Mengambil detail berdasarkan id
        $data['blog'] = 'Detail Website';

        return view('dashboard/detail', $data);
    }


    public function update($id_detail)
    {
        $model = new DetailModel();
        $detail = $model->find($id_detail);

        if (empty($detail)) {
            return redirect()->back()->with('error', 'Detail not found');
        }

        $validationRules = [
            'nama_website' => 'required|max_length[100]',
            'email' => 'required|valid_email|max_length[100]',
            'alamat' => 'required',
            'favicon' => 'uploaded[favicon]|mime_in[favicon,image/png,image/jpeg]|max_size[favicon,1024]',
            'logo' => 'uploaded[logo]|mime_in[logo,image/png,image/jpeg]|max_size[logo,1024]'
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $nama_website = $this->request->getPost('nama_website');
        $email = $this->request->getPost('email');
        $alamat = $this->request->getPost('alamat');

        $faviconFile = $this->request->getFile('favicon');
        $faviconUrl = $detail['favicon'];

        if ($faviconFile->isValid()) {
            $newFaviconName = $faviconFile->getRandomName();
            $faviconFile->move('./uploads/img/', $newFaviconName);
            $faviconUrl = base_url('uploads/img/' . $newFaviconName);
        }

        $logoFile = $this->request->getFile('logo');
        $logoUrl = $detail['logo'];

        if ($logoFile->isValid()) {
            $newLogoName = $logoFile->getRandomName();
            $logoFile->move('./uploads/img/', $newLogoName);
            $logoUrl = base_url('uploads/img/' . $newLogoName);
        }

        $data = [
            'nama_website' => $nama_website,
            'email' => $email,
            'alamat' => $alamat,
            'favicon' => $newFaviconName,
            'logo' => $newLogoName
        ];

        $model->update($id_detail, $data);

        return redirect()->to(base_url('dashbor/detail/' . $id_detail))->with('success', 'Data berhasil diperbarui.');
    }
}
