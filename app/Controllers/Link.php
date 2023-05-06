<?php

namespace App\Controllers;

use App\Models\DetailModel;
use App\Models\LinkModel;


class Link extends BaseController
{
    /**
     *
     * @var Model
     */
    protected $model;

    public function __construct()
    {
        $this->model = new LinkModel();
        $this->helpers = ['form', 'url'];
    }

    public function index()
    {
        $detailweb = new DetailModel();
        $link = new LinkModel();

        $data['detail'] = $detailweb->detail();
        $data['link'] = $link->getLink();
        $data['blog'] = 'Link';

        return view('dashboard/link', $data);
    }

    public function create()
    {
        $detailweb = new DetailModel(); // definisikan variabel $detailweb
        $data = [
            'detail' => $detailweb->detail(),
            'blog' => 'Buat Link Baru'
        ];

        return view('dashboard/link/create', $data);
    }

    public function store()
    {
        $tipeLink = $this->request->getPost('tipe_link');
        $jenisLink = $this->request->getPost('jenis_link');
        $link = $this->request->getPost('link');
        $namaLink = $this->request->getPost('nama_link');

        $post = [
            'tipe_link' => $tipeLink,
            'jenis_link' => $jenisLink,
            'link' => $link,
            'nama_link' => $namaLink
        ];

        $save = $this->model->save($post);

        if ($save) {
            session()->setFlashdata('success', 'Data has been added successfully.');
            return redirect()->to(base_url('dashbor/link'));
        } else {
            session()->setFlashdata('error', 'Some problems occurred, please try again.');
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $link = $this->model->find($id);
        $detailweb = new DetailModel(); // definisikan variabel $detailweb
        if (empty($link)) {
            session()->setFlashdata('error', 'Link not found');
            return redirect()->back();
        }

        $data = [
            'link' => $link,
            'detail' => $detailweb->detail(),
            'blog' => 'Edit Link'
        ];

        return view('dashboard/link/edit', $data);
    }

    public function update($id)
    {
        $link = $this->model->find($id);

        if (empty($link)) {
            session()->setFlashdata('error', 'Link not found');
            return redirect()->back();
        }

        $tipeLink = $this->request->getPost('tipe_link');
        $jenisLink = $this->request->getPost('jenis_link');
        $linkUrl = $this->request->getPost('link');
        $namaLink = $this->request->getPost('nama_link');

        $data = [
            'tipe_link' => $tipeLink,
            'jenis_link' => $jenisLink,
            'link' => $linkUrl,
            'nama_link' => $namaLink
        ];

        $save = $this->model->update($id, $data);

        if ($save) {
            session()->setFlashdata('success', 'Link has been updated successfully.');
            return redirect()->to(base_url('dashbor/link'));
        } else {
            session()->setFlashdata('error', 'Some problems occurred, please try again.');
            return redirect()->back();
        }
    }

    public function destroy($id)
    {
        if (empty($id)) {
            return redirect()->to(base_url('dashbor'));
        }

        $delete = $this->model->delete($id);

        if ($delete > 0) {
            session()->setFlashdata('success', 'Link has been removed successfully.');
        } else {
            session()->setFlashdata('error', 'Failed to remove post, please try again.');
        }

        return redirect()->to(base_url('dashbor/link'));
    }
}
