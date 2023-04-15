<?php

namespace App\Controllers;

use App\Models\MenuModel;
use App\Models\ModelsBlog;
use App\Models\DokumentasiModel;

class Dokumentasi extends BaseController
{
    public function index()
    {
        $menuModel = new MenuModel();
        $blogModel = new ModelsBlog();
        $dokumentasiModel = new DokumentasiModel();

        $data['dokumentasi'] = $dokumentasiModel->getFotoDokumentasi();
        $data['menu'] = $menuModel->getMenu();

        foreach ($data['menu'] as &$m) {
            if ($m['submenu']) {
                $m['submenu'] = $menuModel->getSubMenu($m['id_menu']);
            }
        }

        $data['blog'] = 'Dokumentasi';

        if (!$this->validate([])) {
            $data['validation'] = $this->validator;
        }

        // Get articles where id_menu is empty
        $data['artikel'] = $blogModel->where('id_menu', null)->findAll();

        return view('dokumentasi', $data);
    }
}
