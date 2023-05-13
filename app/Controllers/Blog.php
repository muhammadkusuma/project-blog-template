<?php

namespace App\Controllers;

use App\Models\MenuModel;
use App\Models\ModelsBlog;
use App\Models\DetailModel;
use App\Models\LinkModel;
use App\Models\ArtikelModel;

class Blog extends BaseController
{
    protected $menuModel;
    protected $model;
    protected $detailweb;
    protected $link;
    protected $artikel;

    public function __construct()
    {
        $this->menuModel = new MenuModel();
        $this->model = new ModelsBlog();
        $this->detailweb = new DetailModel();
        $this->link = new LinkModel();
        $this->artikel = new ArtikelModel();
    }

    public function index()
    {
        $data['menu'] = $this->menuModel->getMenu();
        $data['detail'] = $this->detailweb->detail();
        $data['link'] = $this->link->getLink();
        $data['artikel'] = $this->artikel->findAll();
        $data['blog'] = 'Blog';

        // $model = new ModelsBlog();
        // if (!$this->validate([])) {
        //     $data['validation'] = $this->validator;
        //     $data['artikel'] = $model->where('id_menu', null)->findAll();
        //     return view('view_blog', $data);
        // } else {
        //     $data['artikel'] = $model->where('id_menu', null)->findAll();
        //     return view('view_blog', $data);
        // }
        return view('view_blog', $data);
    }
}
