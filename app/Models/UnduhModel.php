<?php

namespace App\Models;

use CodeIgniter\Model;

class UnduhModel extends Model
{
    protected $table = 'dokumentasi';

    public function getUnduhan()
    {
        return $this->where('kategori_dokumentasi', 'Dokumen')
            ->findAll();
    }

    public function getUnduhanByDokumenId($id)
    {
        return $this->where('dokumen_id', $id)->findAll();
    }
}
