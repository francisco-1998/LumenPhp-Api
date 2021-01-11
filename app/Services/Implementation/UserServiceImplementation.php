<?php

namespace App\Services\Implementation;

use App\Models\User;
use App\Services\Interfaces\IUserInterface;
use Illuminate\Support\Facades\Hash;

class UserServiceImplementation implements IUserInterface
{
    private $model;

    public function __construct() {
        $this->model = new User();
    }

    function getUsers(){
        return $this->model->paginate();
    }


    function getUserById(int $id){

    }

    /**
     * Crea un usuario en el sistema
     */
    function addUser(array $user)
    {
        $user['password'] = Hash::make($user['password']);
        $this->model->create($user);
    }


    function updateUser(array $user, int $id){

    }


    function deleteUser(int $id){

    }

    function restoreUser(int $id){

    }
}
