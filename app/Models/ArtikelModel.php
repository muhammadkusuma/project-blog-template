<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table = 'artikel';
    protected $allowedFields = ['id_menu', 'judul', 'slug', 'isi', 'gambar', 'created_at'];
    protected $useTimestamps = true;
    // protected $createdField = 'created_at';

    // protected $validationRules = [
    //     'judul' => 'required|min_length[10]|max_length[100]',
    //     'isi' => 'required'
    // ];

    // protected $skipValidation = false;

    public function PilihBlog($slug)
    {
        $query = $this->getWhere(['slug' => $slug]);
        return $query;
    }
}
