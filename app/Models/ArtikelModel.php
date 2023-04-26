<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table = 'artikel';
    protected $allowedFields = ['judul', 'slug', 'isi', 'gambar'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';

    protected $validationRules = [
        'judul' => 'required|min_length[10]|max_length[100]',
        'slug' => 'required',
        'gambar' => 'required',
        'isi' => 'required'
    ];

    protected $skipValidation = false;
}