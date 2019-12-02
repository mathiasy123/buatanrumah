<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\ReSeller;

use App\VendorContent;

use App\Food;

use App\Profile;

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
        $count_chef = User::count();

        $count_reseller = ReSeller::count();

        $count_food = Food::count();
        
        $chefs = User::latest()->take(10)->get();

        $resellers = ReSeller::latest()->take(10)->get();

        $foods = Food::latest()->take(10)->get();

        return view('admin.dashboard', compact('chefs', 'count_chef', 'resellers', 'count_reseller', 'foods', 'count_food'));
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
        $vendor_content = VendorContent::first();

        return view('admin.buatan_rumah', compact('vendor_content'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function chefProfile(Request $request)
    {
        session()->forget('profile_not_found');

        $request->validate([
            'profile_keyword' => 'nullable'
        ]);

        $profiles = Profile::when($request->profile_keyword, function($query) use($request) {
                    $query->WhereHas('user', function($query) use($request) {
                        $query->where('name', 'like', '%' . strip_tags($request->profile_keyword) . '%');
                    });
                })
                ->latest()
                ->paginate(6);  

        $profiles->appends($request->only('profile_keyword'));

        dd($profiles->user->name);

        if(count($profiles)) {

            return view('admin.chef_profile');

        } else {
            
            session()->flash('profile_not_found', 'Maaf, data profil pemasak yang Anda dicari tidak ada');
            
            return view('admin.chef_profile');
        }
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function chefFood(Request $request)
    {
        session()->forget('food_not_found');

        $request->validate([
            'chef_keyword' => 'nullable'
        ]);

        $chef_foods = Food::when($request->food_keyword, function($query) use($request) {
                            $query->WhereHas('user', function($query) use($request) {
                                $query->where('name', 'like', '%' . strip_tags($request->food_keyword) . '%');
                            })
                            ->orWhere('food_name', 'like', '%' . strip_tags($request->food_keyword) . '%')
                            ->orWhere('rating', $request->food_keyword)
                            ->orWhere('price', $request->food_keyword);
                        })
                        ->latest()
                        ->paginate(6);  
        
        $chef_foods->appends($request->only('food_keyword'));

        if(count($chef_foods)) {

            return view('admin.chef_food', compact('chef_foods'));

        } else {
            
            session()->flash('food_not_found', 'Maaf, data makanan pemasak yang Anda dicari tidak ada');
            
            return view('admin.chef_food', compact('chef_foods'));
        }
    }
}
