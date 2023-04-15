<?php

namespace App\Models;

use CodeIgniter\Model;

class DokumentasiModel extends Model
{
    protected $table = 'dokumentasi';

    public function getFotoDokumentasi()
    {
        return $this->where('kategori_dokumentasi', 'Foto')
            ->findAll();
    }
}
