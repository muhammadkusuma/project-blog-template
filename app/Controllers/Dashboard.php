<?php

namespace App\Controllers;

use App\Models\DetailModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $detailweb = new DetailModel();

        $data['detail'] = $detailweb->detail();
        $data['blog'] = 'Dashboard';

        return view('dashboard/index', $data);
    }
}
