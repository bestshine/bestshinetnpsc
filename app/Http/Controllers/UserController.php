<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\User\UserInterface as UserInterface;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserInterface $user)
    {
        $this->middleware('auth');
        $this->user = $user;
    }    


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $users = $this->user->getUsers();
        return view('user.index',compact('users'));         
    }  

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function usersSearch(Request $request)
    {   
        $value = $request->all();
        $users = $this->user->usersSearch($value);
        return view('user.index',compact('users'));         
    }          
}
