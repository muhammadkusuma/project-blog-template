<?php

namespace App\Controllers;

use App\Models\MenuModel;
use App\Models\ModelsBlog;
use App\Models\DetailModel;
use App\Models\LinkModel;

class Menu extends BaseController
{
    public function index()
    {
        $menuModel = new MenuModel();
        $model = new ModelsBlog();
        $detailweb = new DetailModel();
        $link = new LinkModel();

        $data['menu'] = $menuModel->getMenu();
        $data['detail'] = $detailweb->detail();
        $data['link'] = $link->getLink();

        foreach ($data['menu'] as &$m) {
            if ($m['submenu']) {
                $m['submenu'] = $menuModel->getSubMenu($m['id_menu']);
            }
        }

        if (!$this->validate([])) {
            $data['validation'] = $this->validator;
        }

        // Get articles where id_menu is empty
        $data['artikel'] = $model->where('id_menu', null)->findAll();

        return view('homepage', $data);
    }

    public function blog()
    {
        $menuModel = new MenuModel();
        $data['menu'] = $menuModel->getMenu();

        foreach ($data['menu'] as &$m) {
            if ($m['submenu']) {
                $m['submenu'] = $menuModel->getSubMenu($m['id_menu']);
            }
        }

        $data['blog'] = 'Blog';

        $model = new ModelsBlog();
        if (!$this->validate([])) {
            $data['validation'] = $this->validator;
            $data['artikel'] = $model->where('id_menu', null)->findAll();
            return view('view_blog', $data);
        } else {
            $data['artikel'] = $model->where('id_menu', null)->findAll();
            return view('view_blog', $data);
        }
    }




    // public function view($slug)
    // {
    //     $model = new ModelsBlog();
    //     $data['artikel'] = $model->PilihBlog($slug)->getRow();
    //     return view('view', $data);
    // }

    public function view($slug)
    {
        $menuModel = new MenuModel();
        $model = new ModelsBlog();
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

        if (!$this->validate([])) {
            $data['validation'] = $this->validator;
        }

        $model = new ModelsBlog();
        $data['artikel'] = $model->PilihBlog($slug)->getRow();

        return view('view', $data);
    }




    // public function view($slug)
    // {
    //     $menuModel = new MenuModel();
    //     $data['menu'] = $menuModel->getMenu();
    //     foreach ($data['menu'] as &$m) {
    //         if ($m['submenu']) {
    //             $m['submenu'] = $menuModel->getSubMenu($m['id_menu']);
    //         }
    //     }
    //     $model = new ModelsBlog();
    //     $data['artikel'] = $model->PilihBlog($slug)->getRow();

    //     return view('view', $data);
    // }

    // public function index()
    // {
    //     $menuModel = new MenuModel();
    //     $model = new ModelsBlog();

    //     $data['menu'] = $menuModel->getMenu();

    //     foreach ($data['menu'] as &$m) {
    //         if ($m['submenu']) {
    //             $m['submenu'] = $menuModel->getSubMenu($m['id_menu']);
    //         }
    //     }

    //     if (!$this->validate([])) {
    //         $data['validation'] = $this->validator;
    //     }

    //     $data['artikel'] = $model->getArtikel();

    //     return view('homepage', $data);
    // }
    // public function index()
    // {
    //     $menuModel = new MenuModel();

    //     $data['menu'] = $menuModel->getMenu();

    //     foreach ($data['menu'] as &$m) {
    //         if ($m['submenu']) {
    //             $m['submenu'] = $menuModel->getSubMenu($m['id_menu']);
    //         }
    //     }

    //     return view('homepage', $data);
    // }
}
