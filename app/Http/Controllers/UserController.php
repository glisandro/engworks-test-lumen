<?php

namespace App\Http\Controllers;

use App\User;
use Glisandro\ModuleUser\UserHandler;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(User $user)
    {
        $users = $user->paginate(5);
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new user.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * @param Request $request
     * @param UserHandler $userHandler
     * @return mixed
     * @throws
     */
    public function store(Request $request, UserHandler $userHandler)
    {
        if($userHandler->validate($request)){
            
            $userHandler->store(new User());

            return redirect('users');
        }

        return redirect('users/create');
    }
}
