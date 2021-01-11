<?php

namespace App\Http\Controllers;

use App\Services\Implementation\UserServiceImplementation;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @var UserServiceImplemetation
     */
    private $userServiceImp;

    /**
     * @var Request
     */
    private $request;

    public function __construct(UserServiceImplementation $userService, Request $req)
    {
        $this->userServiceImp = $userService;
        $this->request = $req;
    }

    function createUser()
    {
        $response = response('', 201);
        $this->userServiceImp->addUser($this->request->all());
        return $response;
    }

    function getListUsers()
    {
        return response($this->userServiceImp->getUsers(), 200);
    }


}
