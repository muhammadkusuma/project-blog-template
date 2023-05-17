<?php

namespace App\Controllers;

use App\Models\DetailModel;

class MenuPage extends BaseController
{
    public function index()
    {
        $detailweb = new DetailModel();

        $data['detail'] = $detailweb->detail();
        $data['blog'] = 'Menu';

        return view('dashboard/menu/index', $data);
    }
}
