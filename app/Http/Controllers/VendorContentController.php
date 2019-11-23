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
     * Show the form for editing the specified resource.
     *
     * @param  \App\VendorContent  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit($segment_content)
    {

        $vendor_content = VendorContent::first();

        switch($segment_content) {

            case 'konten_hero':
                $content_to_update = $segment_content;
                $content_name = 'Hero';
                break;

            case 'konten_tentang':
                $content_to_update = $segment_content;
                $content_name = 'Tentang';
                break;

            case 'konten_video':
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
        $request->validate([
            'video' => 'mimetypes:video/x-ms-asf,video/x-flv,video/mp4,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi'
        ]);

        $vendor_data = VendorContent::find(1);

        $old_file = public_path("vendor_images\'frontend\'" . $vendor_data->video);

        if(file_exists($old_file)) {
            
            unlink($old_file);
        }

        if($request->hasFile('video')) {

            $file = $request->file('video');

            $file_name = 'video-kami' . '.' . $file->getClientOriginalExtension();

            $file->move(public_path('vendor_images/frontend'), $file_name);

            $vendor_data->video = $file_name;

            $vendor_data->save();
            
            session()->flash('video_notif', 'Konten video berhasil dibuat/diubah');

            return redirect('/admin/buatan-rumah');     
        } else {

            return redirect('/admin/buatan-rumah');     
        }
    }
}