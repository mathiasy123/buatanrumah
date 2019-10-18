<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the login resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {         
        return view('auth.login');
    }

    /**
     * Display a listing of the signup resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function signup()
    {
        return view('auth.signup');
    }

    /**
     * Authenticate user that attempt to login.
     *
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {         
        $request->validate([
            'email' => 'required|email|max:50',
            'password' => 'required'
        ]);

        return $request;
    }

}
