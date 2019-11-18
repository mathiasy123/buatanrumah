<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\ReSeller;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chefs = User::latest()->take(10)->get();
        
        $count_chef = User::count();

        return view('admin.dashboard', compact('chefs', 'count_chef'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function chef(Request $request)
    {   
        session()->forget('chef_not_found');

        $request->validate([
            'chef_keyword' => 'nullable'
        ]);

        $chefs = User::when($request->chef_keyword, function($query) use($request){
                        $query->where('name', 'like', '%' . strip_tags($request->chef_keyword) . '%')
                        ->orWhere('email', 'like', '%' . strip_tags($request->chef_keyword) . '%')
                        ->orWhere('phone_call', 'like', '%' . strip_tags($request->chef_keyword) . '%')
                        ->orWhere('address', 'like', '%' . strip_tags($request->chef_keyword) . '%')
                        ->orWhere('instagram', 'like', '%' . strip_tags($request->chef_keyword) . '%');
                    })
                    ->latest()
                    ->paginate(6);

        $chefs->appends($request->only('chef_keyword'));

        if(count($chefs)) {

            return view('admin.chef', compact('chefs'));

        } else {
            
            session()->flash('chef_not_found', 'Maaf, akun pemasak yang Anda dicari tidak ada');
            
            return view('admin.chef', compact('chefs'));
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reSeller(Request $request)
    {
        session()->forget('reseller_not_found');

        $request->validate([
            'chef_keyword' => 'nullable'
        ]);

        $resellers = ReSeller::when($request->reseller_keyword, function($query) use($request){
                        $query->where('name', 'like', '%' . strip_tags($requesreseller) . '%')
                        ->orWhere('email', 'like', '%' . strip_tags($requesreseller) . '%')
                        ->orWhere('phone_call', 'like', '%' . strip_tags($requesreseller) . '%')
                        ->orWhere('address', 'like', '%' . strip_tags($requesreseller) . '%');
                    })
                    ->latest()
                    ->paginate(6);

        $resellers->appends($request->only('reseller_keyword'));

        if(count($resellers)) {

            return view('admin.re_seller', compact('resellers'));

        } else {
            
            session()->flash('reseller_not_found', 'Maaf, akun re-seller yang Anda dicari tidak ada');
            
            return view('admin.re_seller', compact('resellers'));
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function buatanRumah()
    {
        return view('admin.buatan_rumah');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function chefProfile()
    {
        return view('admin.chef_profile');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function chefFood()
    {
        return view('admin.chef_food');
    }
}
