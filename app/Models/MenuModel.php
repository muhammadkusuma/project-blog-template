<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table = 'menu';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'slug', 'parent_id'];

    public function getMenu()
    {
        return $this->findAll();
    }

    
}

// public function getSubMenu($id)
    // {
    //     return $this->where('parent_id', $id)->findAll();
    // }
