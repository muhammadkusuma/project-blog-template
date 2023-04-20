<?php

namespace App\Controllers;

use App\Models\DetailModel;

class Masuk extends BaseController
{
    public function index()
    {
        $detailweb = new DetailModel();

        $data['detail'] = $detailweb->detail();
        $data['blog'] = 'Login';
        return view('dashboard/login', $data);
    }
}
