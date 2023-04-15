<?php

namespace App\Models;

use CodeIgniter\Model;

class KontakModel extends Model
{
    protected $table = 'detail_web';
    protected $primaryKey = 'id_kontak';
    protected $allowedFields = ['id_detail', 'nama_kontak', 'email', 'telepon'];
    protected $useTimestamps = true;

    public function getKontak()
    {
        return $this->findAll();
    }
}
