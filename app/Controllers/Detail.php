<?php

namespace App\Controllers;

use App\Models\DetailModel;

class Detail extends BaseController
{
    public function index()
    {
        $detailweb = new DetailModel();

        $data['detail'] = $detailweb->detail();
        $data['blog'] = 'Detail Website';

        return view('dashboard/detail', $data);
    }
}
