<?php

namespace App\Models;

use CodeIgniter\Model;

class LinkModel extends Model
{
    protected $table = 'link';
    protected $primaryKey = 'id_link';
    protected $allowedFields = ['tipe_link', 'jenis_link', 'link', 'nama_link'];

    protected $validationRules = [
        'tipe_link' => 'required',
        'jenis_link' => 'required',
        'link' => 'required',
        'nama_link' => 'required'
    ];

    protected $skipValidation = false;

    public function getLink()
    {
        return $this->findAll();
    }
}
