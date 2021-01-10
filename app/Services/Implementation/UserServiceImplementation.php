<?php

namespace App\Services\Implementation;

use App\Models\User;
use App\Services\Interfaces\IUser;

class UserServiceImplementation implements IUser
{
    private $model;

    public function __construct() {
        $this->model = new User();
    }

    function getUsers(){

    }


    function getUserById(int $id){

    }


    function addUser(array $user){

    }


    function updateUser(array $user, int $id){

    }


    function deleteUser(int $id){

    }

    function restoreUser(int $id){

    }
}
