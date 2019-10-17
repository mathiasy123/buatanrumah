<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;

use App\Order;

use App\Food;

class OrderController extends Controller
{
    /**
     * Display a listing of the order resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::where('user_id', 1)->paginate(10);

        return view('chef.order')->with('orders', $orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($food_id)
    {
        $food = Food::where('food_id', $food_id)->first();

        return view('chef.form_order', compact('food'));
    }

    /**
     * Store a newly created order resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nomor_telepon' => 'required|numeric|digits_between:9,15',
            'alamat_rumah' => 'required|max:150',
            'jumlah' => 'required|numeric'
        ]);
        
        Order::create([
            'user_id' => $request->user_id,
            'food_id' => $request->food_id,
            'order_code' => strtolower(Str::random(9)),
            'customer_name' => strtolower(strip_tags($request->nama)),
            'customer_phone' => $request->nomor_telepon,
            'customer_address' => strtolower($request->alamat_rumah),
            'quantity' => $request->jumlah,
            'total_price' => $request->jumlah * $request->harga
        ]);

        return redirect("/profile/$request->user_id");
    }

    /**
     * Display the specified order resource.
     *
     * @param  int  $order_id
     * @return \Illuminate\Http\Response
     */
    public function show($order_id)
    {
        $order_detail = Order::join('foods', 'orders.food_id', '=', 'foods.food_id')
                        ->where('order_id', $order_id)
                        ->first();

        return view('chef.order_detail', compact('order_detail'));
    }

    /**
     * Find the specified order resource.
     *
     * @param  int  $order_id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $request->validate([
            'order_keyword' => 'nullable'
        ]);

        $orders = Order::where('order_code', 'LIKE', "%$request->order_keyword%")->get();

        return view('chef.order')->with('orders', $orders);
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
