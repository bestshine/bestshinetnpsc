<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\User\UserInterface as UserInterface;
use App\Repositories\Common\CommonInterface as CommonInterface;
use App\Http\Requests\RegistrationFormRequest;

class UserController extends Controller
{
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';
    /**
     * CommonInterface instance
     *
     * @var Interface instance
     * @access protected
     */    
    protected $common;  
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserInterface $user,CommonInterface $common)
    {
        $this->middleware('auth');
        $this->user = $user;
        $this->common = $common;
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
    public function userCreate()
    {   
        $states = $this->common->getAllStates();
        $boards = $this->common->getAllBoards(); 
        $mediums = $this->common->getAllMediums(); 
        $mainModules = $this->user->getActivatedMainModules();
        return view('user.register',compact('states','mediums','boards','mainModules'));        
    }
    public function postuserCreate(RegistrationFormRequest $request)
    {   
        $value = $request->all();
        $obj = $this->user->store($value);
        dd($obj);
        Auth::login($obj);
        return redirect()->intended('dashboard')->with('registerSuccess', 'New user has been registred successfully');
    }
      
}
