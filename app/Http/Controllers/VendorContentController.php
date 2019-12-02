<?php

namespace App\Http\Controllers;

use App\VendorContent;

use Illuminate\Http\Request;

class VendorContentController extends Controller
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
     * Create a re-usable function.
     *
     * @return nothing
     */
    public function checkFileExists($vendor_data, $type) 
    {
        if($type == 'gambar') {

            $old_file = public_path('vendor_assets\images\\' . $vendor_data->hero_image);
        }

        if($type == 'video') {

            $old_file = public_path('vendor_assets\videos\\' . $vendor_data->video);
        }
    
        if(file_exists($old_file)) {
            
            unlink($old_file);
        }

        return;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VendorContent  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit($segment_content)
    {
        $vendor_content = VendorContent::first();

        switch($segment_content) {

            case 'hero':
                $content_to_update = $segment_content;
                $content_name = 'Hero';
                break;

            case 'tentang':
                $content_to_update = $segment_content;
                $content_name = 'Tentang';
                break;

            case 'video':
                $content_to_update = $segment_content;
                $content_name = 'Video';
                break;

            default:
                $content_to_update = '';
                $content_name = '';
                break;
        }

        return view('admin.form_konten', compact('vendor_content', 'content_to_update', 'content_name'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VendorContent  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $vendor_data = VendorContent::find($request->content_id);

        if($request->konten == 'hero') {

            $request->validate([
                'gambar_hero' => 'image|mimes:jpeg,png,jpg|max:5000',
                'judul_hero' => 'string|max:50',
                'subjudul_hero' => 'string|max:100',
                'teks_hero' => 'string|max:255'
            ]);

            $vendor_data->title_hero = strip_tags($request->judul_hero);

            $vendor_data->subtitle_hero = strip_tags($request->subjudul_hero);

            $vendor_data->text_hero = strip_tags($request->teks_hero);

            $vendor_data->save();

            session()->flash('hero_notif', 'Konten hero berhasil dibuat/diubah');
    
            if($request->hasFile('gambar_hero')) {

                $this->checkFileExists($vendor_data, 'gambar');
    
                $file = $request->file('gambar_hero');
    
                $file_name = 'gambar-hero' . '.' . $file->getClientOriginalExtension();
    
                $file->move(public_path('vendor_assets/images'), $file_name);
    
                $vendor_data->hero_image = $file_name;
    
                $vendor_data->save();

                session()->flash('hero_notif', 'Konten hero berhasil dibuat/diubah');
    
            } else {

                return redirect('/admin/buatan-rumah');     
            }

        } else if($request->konten == 'tentang') {

            $request->validate([
                'judul_tentang' => 'string|max:20',
                'teks_tentang' => 'string|max:250'
            ]);
            
            $vendor_data->title_about = strip_tags($request->judul_tentang);

            $vendor_data->text_about = strip_tags($request->teks_tentang);

            $vendor_data->save();

            session()->flash('tentang_notif', 'Konten tentang berhasil dibuat/diubah');

        } else {

            $request->validate([
                'video' => 'mimetypes:video/x-ms-asf,video/x-flv,video/mp4,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi|max:100000'
            ]);
    
            if($request->hasFile('video')) {

                $this->checkFileExists($vendor_data, 'video');
    
                $file = $request->file('video');
    
                $file_name = 'video-kami' . '.' . $file->getClientOriginalExtension();
    
                $file->move(public_path('vendor_assets/videos'), $file_name);
    
                $vendor_data->video = $file_name;
    
                $vendor_data->save();

                session()->flash('video_notif', 'Konten video berhasil dibuat/diubah');
    
            } else {
    
                return redirect('/admin/buatan-rumah');     
            }
        }

        return redirect('/admin/buatan-rumah');
    }
}