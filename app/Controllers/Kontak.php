<?php

namespace App\Controllers;

// use App\Models\UnduhModel;
// use App\Models\DokumentasiModel;
use App\Models\MenuModel;
use App\Models\ModelsBlog;
use App\Models\KontakModel;
use App\Models\DetailModel;
use App\Models\LinkModel;
use App\Models\ArtikelModel;

class Kontak extends BaseController
{
    protected $menuModel;
    protected $model;
    protected $detailweb;
    protected $link;
    protected $artikel;
    protected $kontakModel;

    public function __construct()
    {
        $this->menuModel = new MenuModel();
        $this->model = new ModelsBlog();
        $this->detailweb = new DetailModel();
        $this->link = new LinkModel();
        $this->artikel = new ArtikelModel();
        $this->kontakModel = new KontakModel();
    }
    public function index()
    {
        $data['link'] = $this->link->getLink();
        $data['detail'] = $this->detailweb->detail();
        $data['menu'] = $this->menuModel->getMenu();
        $data['blog'] = 'Kontak';
        $data['kontak'] = $this->kontakModel->getKontak();
        $data['artikel'] = $this->artikel->findAll();

        if (!$this->validate([])) {
            $data['validation'] = $this->validator;
        }

        return view('kontak', $data);
    }
}
