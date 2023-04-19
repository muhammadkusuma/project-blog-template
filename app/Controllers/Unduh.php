<?php

namespace App\Controllers;

use App\Models\UnduhModel;
use App\Models\DokumentasiModel;
use App\Models\MenuModel;
use App\Models\ModelsBlog;
use App\Models\DetailModel;
use App\Models\LinkModel;

class Unduh extends BaseController
{
    public function index()
    {
        $menuModel = new MenuModel();
        $blogModel = new ModelsBlog();
        $dokumentasiModel = new DokumentasiModel();
        $unduhModel = new UnduhModel();
        $detailweb = new DetailModel();
        $link = new LinkModel();

        $data['link'] = $link->getLink();
        $data['detail'] = $detailweb->detail();
        $data['menu'] = $menuModel->getMenu();
        foreach ($data['menu'] as &$m) {
            if ($m['submenu']) {
                $m['submenu'] = $menuModel->getSubMenu($m['id_menu']);
            }
        }

        $data['dokumentasi'] = $dokumentasiModel->getFotoDokumentasi();
        $data['unduhan'] = $unduhModel->getUnduhan();
        $data['blog'] = 'Unduhan';

        if (!$this->validate([])) {
            $data['validation'] = $this->validator;
        }

        // Get articles where id_menu is empty
        $data['artikel'] = $blogModel->where('id_menu', null)->findAll();

        return view('unduh', $data);
    }


    public function dokumen($id)
    {
        $menuModel = new MenuModel();
        $unduhModel = new UnduhModel();
        $dokumenModel = new DokumentasiModel();

        $data['menu'] = $menuModel->getMenu();
        foreach ($data['menu'] as &$m) {
            if ($m['submenu']) {
                $m['submenu'] = $menuModel->getSubMenu($m['id']);
            }
        }

        $data['dokumen'] = $dokumenModel->find($id);
        $data['unduhan'] = $unduhModel->getUnduhanByDokumenId($id);

        return view('unduh', $data);
    }
}
