<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = [
        'username',
        'password_hash',
        'email',
        'role_user'
    ];
    protected $returnType = 'object';
    protected $useTimestamps = false;

    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first();
    }
}
