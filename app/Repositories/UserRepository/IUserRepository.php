<?php

namespace App\Repositories\Interfaces;

use App\Models\Users;

interface IUserRepository {
    public function createNewUser(Users $user);
    public function updateUserByID($id, Users $user);
}