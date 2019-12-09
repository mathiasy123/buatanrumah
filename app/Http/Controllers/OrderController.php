<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;

use App\Order;

use App\Food;

use App\Profile;

class OrderController extends Controller
{
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
     * Display a listing of the order resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->session()->forget('order_not_found');

        $request->validate([
            'order_keyword' => 'nullable'
        ]);

        $orders = Order::where('user_id', auth('web')->user()->id)
                    ->when($request->order_keyword, function($query) use ($request){
                        $query->where('order_code', 'like', '%' . strip_tags($request->order_keyword) . '%')
                        ->orWhere('customer_name', 'like', '%' . strip_tags($request->order_keyword) . '%')
                        ->orWhere('customer_phone', 'like', '%' . strip_tags($request->order_keyword) . '%');
                    })
                    ->paginate(10);
        
        $orders->appends($request->only('order_keyword'));
            
        if(count($orders) > 0) {

            return view('chef.order', compact('orders'));

        }else {

            $request->session()->flash('order_not_found', 'Maaf data pemesanan yang Anda cari tidak ada');
            return view('chef.order', compact('orders'));
        }  
    }

    /**
     * Display a listing of the finished order resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function finishedOrder(Request $request)
    {
        $request->session()->forget('order_not_found');

        $request->validate([
            'order_keyword' => 'nullable'
        ]);

        $finished_orders = Order::where('user_id', auth('web')->user()->id)
                                ->where('finished', 1)
                                ->when($request->order_keyword, function($query) use ($request){
                                    $query->where('order_code', 'like', '%' . strip_tags($request->order_keyword) . '%')
                                    ->orWhere('customer_name', 'like', '%' . strip_tags($request->order_keyword) . '%')
                                    ->orWhere('customer_phone', 'like', '%' . strip_tags($request->order_keyword) . '%')
                                    ->orWhere('quantity', '=', $request->order_keyword)
                                    ->orWhere('total_price', 'like', '%' . $request->order_keyword . '%');
                                })
                                ->paginate(10);
        
        $finished_orders->appends($request->only('order_keyword'));
            
        if(count($finished_orders) > 0) {

            return view('chef.finished_order', compact('finished_orders'));

        } else {

            $request->session()->flash('order_not_found', 'Maaf data pemesanan yang Anda cari tidak ada');

            return view('chef.finished_order', compact('finished_orders'));
        }  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($food_id)
    {
        $food = Food::find($food_id);

        $profile = Profile::where('user_id', $food->user_id)->first();

        return view('profile.form_order', compact('profile', 'food'));
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
            'nama_lengkap' => 'required',
            'nomor_telp' => 'required|numeric|digits_between:9,15',
            'harga_makanan' => 'required',
            'jumlah' => 'required|numeric',
            'alamat' => 'required'
        ]);

        $kode = strtolower(Str::random(9));

        $total = $request->jumlah * $request->harga_makanan;
        
        Order::create([
            'user_id' => $request->user_id,
            'food_id' => $request->food_id,
            'order_code' => $kode,
            'customer_name' => strtolower(strip_tags($request->nama_lengkap)),
            'customer_phone' => $request->nomor_telp,
            'customer_address' => strtolower($request->alamat),
            'quantity' => $request->jumlah,
            'total_price' => $total,
            'finished' => 0
        ]);

        
        $flash_data = [
            'kode' => $kode,
            'total' => $total
        ];

        session()->flash('order_notif', $flash_data);

        return redirect("/pemasak/profil/$request->user_id");
    }

    /**
     * Display the specified order resource.
     *
     * @param  int  $order_id
     * @return \Illuminate\Http\Response
     */
    public function show($order_id)
    {
        $order_details = Order::where('id', $order_id)->with('food')->first();

        return view('chef.order_detail', compact('order_details'));
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
    public function update($order_id)
    {
        $order = Order::find($order_id);

        $order->finished = 1;

        $order->save();

        session()->flash('order_status', 'Pemesanan sudah diselesaikan, silahkan periksa menu pemesanan yang selesai');

        return redirect('/pemasak/pemesanan');
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
