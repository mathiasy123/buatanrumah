<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use App\Order;

use App\Food;

use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the dashboard resource.
     *
     * @return \Illuminate\Http\Responsee3
     */
    public function index()
    {
        $count_order = Order::where('user_id', 1)->count();

        $count_food = Order::where('user_id', 1)->count();

        $orders = Order::where('user_id', 1)->limit(10)->get();

        $foods = Food::where('user_id', 1)->limit(10)->get();

        return view('chef.dashboard', compact('count_order', 'count_food', 'orders', 'foods'));
    }

    /**
     * Display a listing of the food profile resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile($user_id, Request $request) 
    {
        $foods = Food::where('user_id', $user_id)
                    ->when($request->food_keyword, function($query) use($request){
                        $query->where('food_name', 'like', '%' . strip_tags($request->food_keyword) . '%')
                        ->orWhere('rating', $request->food_keyword)
                        ->orWhere('price', $request->food_keyword);
                    })
                    ->paginate(6);
        
        $foods->appends($request->only('food_keyword'));
        
        return view('chef.profile', compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_user' => 'required|max:50',
            'email' => 'required|email|max:50',
            'nomor_telepon' => 'required|numeric|digits_between:9,15',
            'password' => 'required|confirmed'
        ]);

        User::create([
            'name' => strtolower(strip_tags($request->nama_user)),
            'email' => strtolower($request->email),
            'phone_call' => $request->nomor_telepon,
            'password' => Hash::make(strip_tags($request->password)),
            'role_id' => 1
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
