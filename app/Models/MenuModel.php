<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table = 'menu';
    protected $primaryKey = 'id_menu';
    protected $allowedFields = ['menu', 'submenu'];

    public function getMenu()
    {
        return $this->findAll();
    }
    // public function getSubMenu($id)
    // {
    //     $builder = $this->db->table('menu');
    //     $builder->select('menu, submenu');
    //     $builder->where('id_menu', $id);
    //     $query = $builder->get();
    //     return $query->getResultArray();
    // }
    public function getSubMenu($id)
    {
        $builder = $this->db->table('artikel');
        $builder->select('id_menu, judul, slug');
        $builder->where('id_menu', $id);
        $query = $builder->get();
        return $query->getResultArray();
    }
}
