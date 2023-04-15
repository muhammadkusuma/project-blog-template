<?php

namespace App\Controllers;

use App\Models\MenuModel;
use App\Models\ModelsBlog;

class Blog extends BaseController
{

    public function index()
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


}
