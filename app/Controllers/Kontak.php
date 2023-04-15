<?php

namespace App\Controllers;

use App\Models\UnduhModel;
use App\Models\DokumentasiModel;
use App\Models\MenuModel;
use App\Models\ModelsBlog;
use App\Models\KontakModel;

class Kontak extends BaseController
{
    public function index()
    {
        $kontakModel = new KontakModel();
        $menuModel = new MenuModel();
        $blogModel = new ModelsBlog();
        $dokumentasiModel = new DokumentasiModel();
        $unduhModel = new UnduhModel();

        $data['menu'] = $menuModel->getMenu();
        foreach ($data['menu'] as &$m) {
            if ($m['submenu']) {
                $m['submenu'] = $menuModel->getSubMenu($m['id_menu']);
            }
        }

        $data['dokumentasi'] = $dokumentasiModel->getFotoDokumentasi();
        $data['unduhan'] = $unduhModel->getUnduhan();
        $data['blog'] = 'Kontak';
        $data['kontak'] = $kontakModel->getKontak();

        if (!$this->validate([])) {
            $data['validation'] = $this->validator;
        }

        // Get articles where id_menu is empty
        $data['artikel'] = $blogModel->where('id_menu', null)->findAll();

        return view('kontak', $data);
    }
}
