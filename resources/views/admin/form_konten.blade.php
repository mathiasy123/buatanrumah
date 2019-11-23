@extends('admin_layout.master')

@section('title', 'Admin CMS | Kelola Konten Buatan Rumah')

@section('admin_content')
<div class="content">
    <div class="column is-10-desktop is-offset-2-desktop is-9-tablet is-offset-3-tablet is-12-mobile">
        <div class="p-1">
            
            <!-- Title Form Page -->
            <div class="columns is-variable is-desktop">
                <div class="column">
                    <div class="level">
                        <div class="level-left">
                            <h1 class="title">Form Konten Buatan Rumah</h1>
                        </div>
                        <div class="level-right">
                            <a href="/admin/buatan-rumah" class="button is-danger">
                                <span class="icon">
                                    <i class="fas fa-undo"></i>
                                </span>
                                <span>Kembali</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Title Form Page -->

            <!-- Content Management Form Section -->
            <div class="columns is-variable is-desktop">
                <div class="column">
                    <div class="card has-background-light">
                        <div class="card-header">
                            <div class="card-header-title">
                                <p class="is-size-5">Kelola Konten {{ $content_name }}</p> 
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="content">
                                
                                @if($content_to_update == 'konten_hero')
                                <p>Hero</p>
                                @endif
                                
                                @if($content_to_update == 'konten_tentang')
                                <p>Tentang</p>
                                @endif

                                @if($content_to_update == 'konten_video')
                                <p>Form ini adalah untuk mengelola konten bagian video pada halaman buatan rumah</p>

                                <div class="content">
                                    <form method="post" action="/admin/buatan-rumah" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="field">
                                            <label class="label">Video Sekarang</label>
                                            
                                            <figure class="image is-16by9">
                                                <iframe class="has-ratio" width="640" height="360" src="{{ asset('vendor_images/frontend/' . $vendor_content->video) }}" frameborder="0" allowfullscreen></iframe>
                                            </figure>
                                        </div>
                                        <div class="field">
                                            <label class="label">Video Baru (File harus berupa format video dan maksimal 20 MB)</label> 
                                            <div class="file has-name is-fullwidth">
                                                <label class="file-label">
                                                    <input class="file-input" type="file" name="video">
                                                    <span class="file-cta">
                                                        <span class="file-icon">
                                                            <i class="fas fa-upload"></i>
                                                        </span>
                                                        <span class="file-label">
                                                            Pilih file video . . .  
                                                        </span>
                                                    </span>
                                                    <span class="file-name">
                                                        <span class="file-name-here"></span>
                                                    </span>
                                                </label>
                                            </div>
                                            @error('video')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                            <figure class="image is-16by9">
                                                <iframe class="has-ratio new-video" width="640" height="360" src="" frameborder="0" allowfullscreen></iframe>
                                            </figure>
                                        </div>

                                        <button type="submit" class="button is-warning is-medium is-rounded is-fullwidth">Buat/Ubah Konten</button>

                                    </form>
                                </div>
                                @endif
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Content Management Form Section -->

        </div>
    </div>
</div>
@endsection


