<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
