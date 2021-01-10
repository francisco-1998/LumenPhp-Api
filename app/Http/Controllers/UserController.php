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
}