<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Cache;

use App\Order;

use App\Food;

use App\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:web')->only('index');

        $this->middleware('auth:admin')->except('index');
    }

    /**
     * Display a listing of the dashboard resource.
     *
     * @return \Illuminate\Http\Responsee3
     */
    public function index()
    {
        $user = auth('web')->user();

        $foods = Food::where('user_id', $user->id)->take(10)->latest()->get();

        $orders = Order::where('user_id', $user->id)->take(10)->latest()->get();

        $finished_orders = Order::where('user_id', $user->id)->where('finished', 1)->take(10)->latest()->get();

        $count_order = Order::where('user_id', $user->id)->count();

        $count_food = Food::where('user_id', $user->id)->count();
        
        $count_finished_order = Order::where('user_id', $user->id)->where('finished', 1)->count();

        return view('chef.dashboard', compact('orders', 'count_order', 'foods', 'count_food', 'finished_orders', 'count_finished_order'));
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
    public function edit($user_id)
    {
        $chefs = User::find($user_id);

        return view('admin.form.form_chef', compact('chefs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        session()->forget('chef_notif');

        $chef = User::find($request->user_id);

        $request->validate([
            'nama_pemasak' => 'string|max:50',
            'email_pemasak' => 'email:rfc,strict|max:50',
            'ig_pemasak' => 'string|max:30',
            'telp_pemasak' => 'numeric|digits_between:9,15',
            'alamat_pemasak' => 'max:255',
            'gambar_pemasak' => 'image|mimes:jpeg,png,jpg|max:5000'
        ]);

        $chef->name = $request->nama_pemasak;

        $chef->email = $request->email_pemasak;

        $chef->phone_call = $request->telp_pemasak;

        $chef->address = $request->alamat_pemasak;

        $chef->instagram = $request->ig_pemasak;

        $chef->save();

        session()->flash('chef_notif', 'Data akun pemasak berhasil diubah');

        if($request->hasFile('gambar_pemasak')) {
            
            $file = $request->file('gambar_pemasak');

            $folder_path = public_path('user_assets\images\\chef\\');

            $file_name = $request->nama_pemasak . '.' . $file->getClientOriginalExtension();

            $current_file = $chef->user_image;

            if($current_file != null) {

                $old_file = public_path('user_assets\images\chef\\' . $current_file);

                if(file_exists($old_file)) {

                    unlink($old_file);
                }

            }

            $file->move(public_path('user_assets\images\chef'), $file_name);

            $chef->user_image = $file_name;

            $chef->save();

            session()->flash('chef_notif', 'Data akun pemasak berhasil diubah');

            return redirect('/admin/pemasak');

        } else {
            
            return redirect('/admin/pemasak'); 
        }

        return redirect('/admin/pemasak');
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
