<?php

namespace App\Controllers;

use App\Models\ArtikelModel;
use App\Models\DetailModel;

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
            'posts' => $this->model->paginate(10),
            'pager' => $this->model->pager,
            'detail' => $detailweb->detail(),
            'blog' => 'Dashboard'
        ];

        return view('dashboard/index', $data);
    }


    public function create()
    {
        $data = ['title' => 'Create new post'];

        return view('posts/create', $data);
    }

    public function store()
    {
        $title = $this->request->getPost('title');
        $content = $this->request->getPost('content');
        $status = $this->request->getPost('status');

        $post = [
            'title' => $title,
            'content' => $content,
            'status' => $status,
            'slug' => url_title(strtolower($title)),
        ];

        $save = $this->model->save($post);

        if ($save) {
            session()->setFlashdata('success', 'Post has been added successfully.');
            return redirect()->to(base_url('post'));
        } else {
            session()->setFlashdata('error', 'Some problems occured, please try again.');
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
            'detail' => $detailweb->detail()
        ];

        return view('dashboard/posts/edit', $data);
    }

    public function update($id)
    {
        $title = $this->request->getPost('title');
        $content = $this->request->getPost('content');
        $status = $this->request->getPost('status');

        $post = [
            'title' => $title,
            'content' => $content,
            'status' => $status,
            'slug' => url_title($title)
        ];

        $update = $this->model->update($id, $post);

        if ($update) {
            session()->setFlashdata('success', 'Post has been updated successfully');
            return redirect()->to(base_url('post'));
        } else {
            session()->setFlashdata('error', 'Some problems occured, please try again.');
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
