<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password'];

    // Metode untuk memeriksa kredensial pengguna
    public function validateUser($username, $password)
    {
        $user = $this->where('username', $username)->first();
        if ($user && $user['password'] === $password) {
            return $user;
        }
        return false;
    }
}
