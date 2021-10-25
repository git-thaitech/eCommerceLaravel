<?php

use App\Models\Users;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\IUserRepository;

class UserRepository extends BaseRepository implements IUserRepository {
    public function createNewUser(Users $user)
    {
        //Insert a new user to database
    }

    public function updateUserByID($id, Users $user)
    {
        //Update a user by ID
    }
}