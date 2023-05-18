<?php

namespace App\Controllers;

use App\Models\MenuModel;
use App\Models\DetailModel;

class MenuPage extends BaseController
{
    /**
     *
     * @var Model
     */
    protected $model;
    protected $menuModel;
    protected $detailweb;

    public function __construct()
    {
        $this->menuModel = new MenuModel();
        $this->detailweb = new DetailModel();
        $this->model = new MenuModel();
        $this->helpers = ['form', 'url'];
    }

    // protected $model;

    // public function __construct()
    // {
    //     $this->model = new MenuModel();
    // }

    public function index()
    {
        $data['menu'] = $this->menuModel->getMenu();
        $data['detail'] = $this->detailweb->detail();
        $data['blog'] = 'Menu';

        return view('dashboard/menu/index', $data);
    }

    public function destroy($id_menu)
    {
        if (empty($id_menu)) {
            return redirect()->to(base_url('dashbor/menu'));
        }

        $delete = $this->menuModel->delete($id_menu);

        if ($delete > 0) {
            session()->setFlashdata('success', 'Menu has been removed successfully.');
        } else {
            session()->setFlashdata('error', 'Failed to remove post, please try again.');
        }

        return redirect()->to(base_url('dashbor/menu'));
    }

    public function store()
    {
        $menu = $this->request->getPost('menu');
        $submenu = $this->request->getPost('submenu');

        // Validasi jika data kosong
        if (empty($menu) || empty($submenu)) {
            session()->setFlashdata('error', 'Please fill in all the fields.');
            return redirect()->back();
        }

        // Hapus angka, link, dan simbol pada nama menu dan submenu
        $menu = preg_replace('/[0-9]|http(s)?:\/\/[^\s]+|\W/', '', $menu);
        $submenu = preg_replace('/[0-9]|http(s)?:\/\/[^\s]+|\W/', '', $submenu);

        $post = [
            'menu' => $menu,
            'submenu' => $submenu,
        ];

        $save = $this->model->save($post);

        if ($save) {
            session()->setFlashdata('success', 'Menu has been added successfully.');
            return redirect()->to(base_url('dashbor/menu'));
        } else {
            session()->setFlashdata('error', 'Some problems occurred, please try again.');
            return redirect()->back();
        }
    }
}
