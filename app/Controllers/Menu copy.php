<?php

namespace App\Controllers;

use App\Models\MenuModel;

class Menu extends BaseController
{
    public function index()
    {
        $menuModel = new MenuModel();
        $menu = $menuModel->findAll();

        $data = [
            'menu' => $menu
        ];

        return view('homepage', $data);
    }

    public function create()
    {
        return view('menu/create');
    }

    public function store()
    {
        $menuModel = new MenuModel();

        $menu = [
            'menu' => $this->request->getPost('menu'),
            'submenu' => $this->request->getPost('submenu'),
        ];

        $menuModel->save($menu);

        return redirect()->to('/menu');
    }

    public function edit($id_menu)
    {
        $menuModel = new MenuModel();
        $menu = $menuModel->find($id_menu);

        $data = [
            'menu' => $menu
        ];

        return view('menu/edit', $data);
    }

    public function update($id_menu)
    {
        $menuModel = new MenuModel();

        $menu = [
            'menu' => $this->request->getPost('menu'),
            'submenu' => $this->request->getPost('submenu'),
        ];

        $menuModel->update($id_menu, $menu);

        return redirect()->to('/menu');
    }

    public function delete($id_menu)
    {
        $menuModel = new MenuModel();
        $menuModel->delete($id_menu);

        return redirect()->to('/menu');
    }
}
