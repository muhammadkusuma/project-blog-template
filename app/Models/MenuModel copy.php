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

    public function getMenuById($id_menu)
    {
        return $this->where('id_menu', $id_menu)->first();
    }

    public function saveMenu($data)
    {
        $this->insert($data);
        return $this->getInsertID();
    }

    public function updateMenu($id_menu, $data)
    {
        $this->update($id_menu, $data);
    }

    public function deleteMenu($id_menu)
    {
        $this->delete($id_menu);
    }
}
