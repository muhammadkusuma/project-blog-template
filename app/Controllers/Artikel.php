<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use App\Models\DetailModel;
use App\Models\MenuModel;

class Artikel extends BaseController
{
    /**
     *
     * @var Model
     */
    protected $model;

    public function __construct()
    {
        $this->model = new ArtikelModel();
        $this->helpers = ['form', 'url'];
    }

    public function index()
    {
        $detailweb = new DetailModel(); // definisikan variabel $detailweb
        $data = [
            'posts' => $this->model->paginate(20),
            'pager' => $this->model->pager,
            'detail' => $detailweb->detail(),
            'blog' => 'Dashboard'
        ];

        return view('dashboard/index', $data);
    }


    public function create()
    {
        $detailweb = new DetailModel(); // definisikan variabel $detailweb
        $menuModel = new MenuModel();
        $data = [
            'detail' => $detailweb->detail(),
            'blog' => 'Buat Konten Baru',
            'menus' => $menuModel->getMenu(), // Mendapatkan data menu dari model
        ];

        return view('dashboard/posts/create', $data);
    }

    public function store()
    {
        $this->validate([
            'judul' => 'required',
            'isi' => 'required',
            'terbit' => 'required',
            'gambar' => [
                'uploaded[gambar]',
                'mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'max_size[gambar,1024]' // Ubah angka sesuai dengan ukuran maksimum file dalam kilobita (KB)
            ],
            'menu' => 'required'
        ]);

        $judul = $this->request->getPost('judul');
        $isi = $this->request->getPost('isi');
        $terbit = $this->request->getPost('terbit');
        $gambar = $this->request->getFile('gambar');
        $menu = $this->request->getPost('menu');

        // Konversi format datetime ke format yang diterima oleh basis data
        $terbit = date('Y-m-d H:i:s', strtotime($terbit));

        $post = [
            'id_menu' => $menu,
            'judul' => $judul,
            'isi' => $isi,
            'created_at' => $terbit,
            'slug' => url_title(strtolower($judul))
        ];

        if ($gambar && $gambar->isValid()) {
            $newName = $gambar->getRandomName(); // Menghasilkan nama acak untuk file foto
            $gambar->move('uploads/img/', $newName);
            $post['gambar'] = $newName;
        }

        $save = $this->model->save($post);

        if ($save) {
            session()->setFlashdata('success', 'Post has been added successfully.');
            return redirect()->to(base_url('dashbor'));
        } else {
            session()->setFlashdata('error', 'Some problems occurred, please try again.');
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $post = $this->model->find($id);
        $detailweb = new DetailModel(); // definisikan variabel $detailweb
        if (empty($post)) {
            session()->setFlashdata('error', 'Post not found');
            return redirect()->back();
        }

        $data = [
            'post' => $post,
            'detail' => $detailweb->detail(),
            'blog' => 'Edit Konten'
        ];

        return view('dashboard/posts/edit', $data);
    }

    public function update($id)
    {
        $post = $this->model->find($id);

        if (empty($post)) {
            session()->setFlashdata('error', 'Post not found');
            return redirect()->back();
        }

        $judul = $this->request->getPost('judul');
        $isi = $this->request->getPost('isi');
        $terbit = $this->request->getPost('terbit');
        $gambar = $this->request->getFile('gambar');

        // Konversi format datetime ke format yang diterima oleh basis data
        $terbit = date('Y-m-d H:i:s', strtotime($terbit));

        $data = [
            'judul' => $judul,
            'isi' => $isi,
            'created_at' => $terbit,
            'slug' => url_title(strtolower($judul)),
        ];

        if ($gambar && $gambar->isValid()) {
            $newName = $gambar->getRandomName(); // Menghasilkan nama acak untuk file foto
            $gambar->move('uploads/img/', $newName);
            $data['gambar'] = $newName;
        }

        $save = $this->model->update($id, $data); // Menggunakan method update pada model

        if ($save) {
            session()->setFlashdata('success', 'Post has been updated successfully.');
            return redirect()->to(base_url('dashbor'));
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
            session()->setFlashdata('success', 'Post has been removed successfully.');
        } else {
            session()->setFlashdata('error', 'Failed to remove post, please try again.');
        }

        return redirect()->to(base_url('dashbor'));
    }
}
