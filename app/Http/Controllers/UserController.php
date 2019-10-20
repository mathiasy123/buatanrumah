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
        $user = auth()->user();

        $count_order = Order::where('user_id', $user->id)->count();

        $count_food = Food::where('user_id', $user->id)->count();

        $orders = Order::where('user_id', $user->id)->limit(10)->get();

        $foods = Food::where('user_id', $user->id)->limit(10)->get();

        return view('chef.dashboard', compact('count_order', 'count_food', 'orders', 'foods'));
    }

    /**
     * Display a listing of the food profile resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile($user_id, Request $request) 
    {
        session()->forget('food_not_found');

        $request->validate([
            'food_keyword' => 'nullable'
        ]);

        $foods = Food::where('user_id', $user_id)
                    ->when($request->food_keyword, function($query) use($request){
                        $query->where('food_name', 'like', '%' . strip_tags($request->food_keyword) . '%')
                        ->orWhere('rating', $request->food_keyword)
                        ->orWhere('price', $request->food_keyword);
                    })
                    ->paginate(6);
        
        $foods->appends($request->only('food_keyword'));

        if(count($foods)) {
            return view('chef.profile', compact('foods'));
        }else {
            session()->flash('food_not_found', 'Maaf, makanan yang Anda dicari tidak ada');
            
            return view('chef.profile', compact('foods'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * 
     */
    public function store(Request $request)
    {

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
