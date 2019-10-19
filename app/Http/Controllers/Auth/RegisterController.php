<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Validator;

use App\User;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * 
     */
    public function register(Request $request)
    {
        $request->validate([
            'nama_user' => 'required|string|max:50',
            'email' => 'required|email:rfc,strict|max:50',
            'nomor_telepon' => 'required|numeric|digits_between:9,15',
            'password' => 'required|string|min:5|confirmed'
        ]);

        User::create([
            'name' => strtolower(strip_tags($request->nama_user)),
            'email' => strtolower($request->email),
            'phone_call' => $request->nomor_telepon,
            'password' => Hash::make($request->password),
            'role_id' => 1
        ]);

        return redirect('/login')->with('registered', 'Anda telah berhasil membuat akun, silahkan login');
    }

}
