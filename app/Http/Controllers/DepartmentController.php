<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepartmentController extends Controller
{
    private $departmentID = [
        '-L5ieG7kK9sRj9p5Plk-',
        '-L5ieOz3bSymDh1gK9mr',
        '-L5ieTIAAADMzQxqbi7E',
        '-L5iedxWWfwuJ9fENETW',
        '-L5ieh5nqjaWdk1xvx4t',
        '-L5iejzu0vNns3yNjkCy',
        '-L78iIyWqNuqjwomY78q'
    ];

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Auth::check() && Auth::user()->isAdmin == "1") {
            return View('department')->with('department', '-L5ieG7kK9sRj9p5Plk-');
        }
        Auth::logout();
        return View('auth.login');

    }

    public function department($depID){
        if(in_array($depID, $this->departmentID)){
            return View('department')->with('department', $depID);
        }
        Auth::logout();
        return redirect('/login');
    }

}
