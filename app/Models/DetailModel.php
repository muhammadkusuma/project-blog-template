<?php

namespace App\Models;

use CodeIgniter\Model;

class DetailModel extends Model
{
    protected $table = 'detail_web';
    protected $primaryKey = 'id_detail';
    protected $allowedFields = ['nama_website', 'alamat', 'email', 'favicon', 'logo'];

    public function detail()
    {
        return $this->findAll();
    }

    public function getDetailById($id)
    {
        // Mengambil detail berdasarkan id
        return $this->find($id);
    }
}
