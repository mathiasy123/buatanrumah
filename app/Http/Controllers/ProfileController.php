<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Food;

use App\Profile;

use App\User;

class ProfileController extends Controller
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
     * Convert phone number format.
     *
     * @return void
     */
    public function convertPhone($phone_number)
    {
        if(substr(trim($phone_number), 0, 1) == '0') {
            return '62' . substr(trim($phone_number), 1); 
        }
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $user_id)
    {
        session()->forget('food_not_found');

        $request->validate([
            'food_keyword' => 'nullable'
        ]);

        $profile = Profile::where('user_id', $user_id)->with('user')->first();

        $whatsapp_number = $this->convertPhone($profile->user->phone_call);

        $foods = Food::where('user_id', $user_id)
                    ->when($request->food_keyword, function($query) use($request){
                        $query->where('food_name', 'like', '%' . strip_tags($request->food_keyword) . '%')
                        ->orWhere('price', 'like', '%' . $request->food_keyword . '%');
                    })
                    ->latest()
                    ->paginate(6);
        
        $foods->appends($request->only('food_keyword'));

        if(!empty($profile)) {

            if(count($foods)) {

                return view('profile.index', compact('profile', 'foods', 'whatsapp_number'));
    
            }else {
                
                session()->flash('food_not_found', 'Maaf, makanan yang Anda dicari tidak ada');
                
                return view('profile.index', compact('profile', 'foods', 'whatsapp_number'));
            }

        } else {

            return view('profile.empty');
            
        }     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chefs = User::all();

        $action_type = 'tambah';

        return view('admin.form.form_profile', compact('chefs', 'action_type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        session()->forget('profile_notif');

        $request->validate([
            'pemilik_profil' => 'required',
            'judul_hero' => 'required|max:30',
            'subjudul_hero' => 'required|max:150',
            'nama_katering' => 'required|max:50',
            'judul_tentang' => 'required|max:50',
            'teks_tentang' => 'required',
            'gambar_hero' => 'required|image|mimes:jpeg,png,jpg|max:5000',
            'gambar_tentang' => 'required|image|mimes:jpeg,png,jpg|max:5000'
        ]);

        $folder_path = public_path('user_assets\images\content\\');

        $folder_name = $request->pemilik_profil;

        if(!is_dir($folder_path . $folder_name)) {

            mkdir($folder_path . $folder_name);
        } 
        
        $file_hero = $request->file('gambar_hero');

        $file_hero_name = 'gambar-hero' . '.' . $file_hero->getClientOriginalExtension();

        $file_hero->move(public_path('user_assets\images\content\\' . $folder_name), $file_hero_name);

        $file_about = $request->file('gambar_tentang');

        $file_about_name = 'gambar-tentang' . '.' . $file_about->getClientOriginalExtension();

        $file_about->move(public_path('user_assets\images\content\\' . $folder_name), $file_about_name);

        Profile::create([
            'user_id' => $request->pemilik_profil,
            'hero_image' => $file_hero_name,
            'title_hero' => strtolower($request->judul_hero),
            'subtitle_hero' => strtolower($request->subjudul_hero),
            'cathering_name' => strtolower($request->nama_katering),
            'title_about' => strtolower($request->judul_tentang),
            'text_about' => $request->teks_tentang,
            'about_image' => $file_about_name
        ]);

        session()->flash('profile_notif', 'Data makanan pemasak berhasil dibuat');

        return redirect('/admin/pemasak-profil');
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
    public function edit($profile_id)
    {
        $chefs = User::all();

        $profile = Profile::find($profile_id);

        $action_type = 'ubah';

        return view('admin.form.form_profile', compact('chefs', 'profile', 'action_type'));
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
        session()->forget('profile_notif');

        $profile = Profile::find($request->profile_id);

        $request->validate([
            'pemilik_profil' => 'required',
            'judul_hero' => 'required|max:30',
            'subjudul_hero' => 'required|max:150',
            'nama_katering' => 'required|max:50',
            'judul_tentang' => 'required|max:50',
            'teks_tentang' => 'required',
            'gambar_hero' => 'image|mimes:jpeg,png,jpg|max:5000',
            'gambar_tentang' => 'image|mimes:jpeg,png,jpg|max:5000'
        ]);

        $profile->user_id = $request->pemilik_profil;
        
        $profile->title_hero = $request->judul_hero;

        $profile->subtitle_hero = $request->subjudul_hero;

        $profile->cathering_name = $request->nama_katering;
        
        $profile->title_about = $request->judul_tentang;

        $profile->text_about = $request->teks_tentang;

        $profile->save();

        session()->flash('profile_notif', 'Data makanan pemasak berhasil diubah');

        $folder_name = $request->pemilik_profil;

        $folder_path = public_path('user_assets\images\content\\');

        if($request->hasFile('gambar_hero')) {
            
            $file_hero = $request->file('gambar_hero');

            $file_hero_name = 'gambar-hero' . '.' . $file_hero->getClientOriginalExtension();

            $current_file_hero = $profile->hero_image;

            if($current_file_hero != null) {

                $old_file_hero = public_path('user_assets\images\content\\' . $folder_name . '\\' . $current_file_hero);

                if(file_exists($old_file_hero)) {

                    unlink($old_file_hero);
                }

            }

            $file_hero->move(public_path('user_assets\images\content\\' . $folder_name), $file_hero_name);

            $profile->hero_image = $file_hero_name;

            $profile->save();

            session()->flash('chef_notif', 'Data akun pemasak berhasil diubah');

        } 

        if($request->hasFile('gambar_tentang') ) {
            
            $file_about = $request->file('gambar_tentang');

            $file_about_name = 'gambar-tentang' . '.' . $file_about->getClientOriginalExtension();

            $current_file_about = $profile->about_image;

            if($current_file_about != null) {

                $old_file_about = public_path('user_assets\images\content\\' . $folder_name . '\\' . $current_file_about);

                if(file_exists($old_file_about)) {

                    unlink($old_file_about);
                }

            }

            $file_about->move(public_path('user_assets\images\content\\' . $folder_name), $file_about_name);

            $profile->about_image = $file_about_name;

            $profile->save();

            session()->flash('chef_notif', 'Data akun pemasak berhasil diubah');

        } 

        return redirect('/admin/pemasak-profil');
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
