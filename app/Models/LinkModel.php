<?php

namespace App\Models;

use CodeIgniter\Model;

class LinkModel extends Model
{
    protected $table = 'link';
    protected $primaryKey = 'id_link';
    protected $allowedFields = ['tipe_link', 'jenis_link', 'link'];

    public function getLink()
    {
        return $this->findAll();
    }
}
