<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use App\Food;

use App\User;

class FoodController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only('index');

        $this->middleware('auth:admin')->except('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        session()->forget('food_not_found');

        $request->validate([
            'chef_keyword' => 'nullable'
        ]);

        $foods = Food::where('user_id', auth('web')->user()->id)
                        ->when($request->food_keyword, function($query) use($request) {
                            $query->where('food_name', 'like', '%' . strip_tags($request->food_keyword) . '%')
                            ->orWhere('rating', $request->food_keyword)
                            ->orWhere('description', $request->food_keyword)
                            ->orWhere('price', $request->food_keyword);
                        })
                        ->latest()
                        ->paginate(6);  
        
        $foods->appends($request->only('food_keyword'));

        if(count($foods)) {

            return view('chef.food', compact('foods'));

        } else {
            
            session()->flash('food_not_found', 'Maaf, data makanan yang Anda dicari tidak ada');
            
            return view('chef.food', compact('foods'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chefs = User::all('id', 'name');

        $action_type = 'tambah';

        return view('admin.form.form_makanan', compact('chefs', 'action_type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        session()->forget('food_notif');

        $request->validate([
            'pemilik_makanan' => 'required',
            'nama_makanan' => 'required|max:50',
            'rating' => 'required',
            'desk_makanan' => 'required|max:250',
            'harga_makanan' => 'required|numeric',
            'gambar_makanan' => 'required|image|mimes:jpeg,png,jpg|max:5000'
        ]);

        $file = $request->file('gambar_makanan');

        $folder_path = public_path('user_assets\images\food\\');

        $folder_name = $request->pemilik_makanan;

        if(!is_dir($folder_path . $folder_name)) {

            mkdir($folder_path . $folder_name);
        } 
    
        $file_name = $request->nama_makanan . '.' . $file->getClientOriginalExtension();

        $file->move(public_path('user_assets\images\food\\' . $folder_name), $file_name);

        Food::create([
            'user_id' => $request->pemilik_makanan,
            'food_name' => strip_tags(strtolower($request->nama_makanan)),
            'rating' => $request->rating,
            'description' => strip_tags($request->desk_makanan),
            'image' => $file_name,
            'price' => $request->harga_makanan
        ]);

        session()->flash('food_notif', 'Data makanan pemasak berhasil dibuat');

        return redirect('/admin/pemasak-makanan');
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
    public function edit($food_id)
    {
        $foods = Food::find($food_id);

        $chefs = User::all('id', 'name');

        $action_type = 'ubah';

        return view('admin.form.form_makanan', compact('foods', 'chefs', 'action_type'));
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
        session()->forget('food_notif');

        $food = Food::find($request->food_id);

        $request->validate([
            'pemilik_makanan' => 'required',
            'nama_makanan' => 'required|max:50',
            'rating' => 'required',
            'desk_makanan' => 'required|max:250',
            'harga_makanan' => 'required|numeric',
            'gambar_makanan' => 'image|mimes:jpeg,png,jpg|max:5000'
        ]);

        $food->user_id = $request->pemilik_makanan;

        $food->food_name = $request->nama_makanan;

        $food->rating = $request->rating;

        $food->description = $request->desk_makanan;

        $food->price = $request->harga_makanan;

        $food->save();

        session()->flash('food_notif', 'Data makanan pemasak berhasil diubah');

        if($request->hasFile('gambar_makanan')) {
            
            $file = $request->file('gambar_makanan');

            $folder_path = public_path('chef_images\food_pictures\\');

            $folder_name = $request->pemilik_makanan;

            if(is_dir($folder_path . $folder_name)) {

                $file_name = $request->nama_makanan . '.' . $file->getClientOriginalExtension();

                $current_file = $food->image;

                if($current_file != null) {
                    
                    $old_file = public_path("chef_images\\food_pictures\\" . $current_file);

                    if(file_exists($old_file)) {

                        unlink($old_file);
                    }

                }

                $file->move(public_path('chef_images\food_pictures'), $file_name);

                $food->image = $file_name;

                $food->save();

                session()->flash('food_notif', 'Data makanan pemasak berhasil diubah');

                return redirect('/admin/pemasak-makanan');

            } else {

                session()->flash('food_notif', 'Folder gambar makanan tidak ada');

                return redirect("/admin/ubah/pemasak-makanan/$request->food_id");
            }

        } else {

            return redirect('/admin/pemasak-makanan'); 
        }

        return redirect('/admin/pemasak-makanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_id, $food_id)
    {
        session()->forget('food_notif');

        $food = Food::find($food_id);

        $folder_name = $user_id;

        $old_file = public_path('user_assets\images\food\\' . $folder_name . '\\' . $food->image);

        if(file_exists($old_file)) {

            unlink($old_file);
        }

        $food->delete();

        session()->flash('food_notif', 'Data makanan pemasak berhasil dihapus');

        return redirect('/admin/pemasak-makanan');
    }
}


