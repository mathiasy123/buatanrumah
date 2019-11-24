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
                                <p>Form ini adalah untuk mengelola konten bagian hero pada halaman buatan rumah</p>

                                <div class="content">
                                    <form method="post" action="/admin/buatan-rumah" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <input type="hidden" name="konten" value="hero">

                                        <div class="field">
                                            <label class="label">Gambar Sekarang</label>
                                            
                                            <figure class="image is-4by3">
                                                <img src="{{ asset('vendor_images/frontend/' . $vendor_content->hero_image) }}">
                                            </figure>

                                        </div>
                                        <div class="field">
                                            <label class="label">Gambar Baru (File harus berupa format gambar dan maksimal 5 MB)</label> 
                                            <div class="file has-name is-fullwidth">
                                                <label class="file-label">
                                                    <input class="file-input" type="file" name="gambar_hero">
                                                    <span class="file-cta">
                                                        <span class="file-icon">
                                                            <i class="fas fa-upload"></i>
                                                        </span>
                                                        <span class="file-label">
                                                            Pilih file gambar . . .  
                                                        </span>
                                                    </span>
                                                    <span class="file-name">
                                                        <span class="file-name-here"></span>
                                                    </span>
                                                </label>
                                            </div>
                                            @error('gambar_hero')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                            <figure class="image is-4by3">
                                                <img class="new-media" src="https://bulma.io/images/placeholders/480x480.png">
                                            </figure>
                                        </div>

                                        <div class="field">
                                            <label class="label">Judul Hero</label>
                                            <div class="control">
                                                <input class="input @error('judul_hero') is-danger @enderror" name="judul_hero" value="{{ $vendor_content->title_hero }}" type="text" placeholder="Masukkan Judul Hero Anda">
                                            </div>
                                            @error('judul_hero')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="field">
                                            <label class="label">Sub Judul Hero</label>
                                            <div class="control">
                                                <input class="input @error('subjudul_hero') is-danger @enderror" name="subjudul_hero" value="{{ $vendor_content->subtitle_hero }}" type="text" placeholder="Masukkan Sub Judul Hero Anda">
                                            </div>
                                            @error('subjudul_hero')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="field">
                                            <label class="label">Teks hero</label>
                                            <div class="control">
                                                <textarea class="textarea" name="teks_hero">{{ $vendor_content->text_hero }}</textarea>
                                            </div>
                                            @error('teks_hero')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <button type="submit" class="button is-warning is-medium is-rounded is-fullwidth">Buat/Ubah Konten</button>

                                    </form>
                                </div>
                                @endif
                                
                                @if($content_to_update == 'konten_tentang')
                                <p>Form ini adalah untuk mengelola konten bagian tentang pada halaman buatan rumah</p>

                                <div class="content">
                                    <form method="post" action="/admin/buatan-rumah" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <input type="hidden" name="konten" value="tentang">

                                        <div class="field">
                                            <label class="label">Judul Tentang</label>
                                            <div class="control">
                                                <input class="input @error('judul_tentang') is-danger @enderror" name="judul_tentang" value="{{ $vendor_content->title_about }}" type="text" placeholder="Masukkan Judul Tentang Anda">
                                            </div>
                                            @error('judul_tentang')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="field">
                                            <label class="label">Teks Tentang</label>
                                            <div class="control">
                                                <textarea class="textarea" name="teks_tentang">{{ $vendor_content->text_about }}</textarea>
                                            </div>
                                            @error('teks_tentang')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <button type="submit" class="button is-warning is-medium is-rounded is-fullwidth">Buat/Ubah Konten</button>

                                    </form>
                                </div>
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
                                                <iframe class="has-ratio new-media" width="640" height="360" src="" frameborder="0" allowfullscreen></iframe>
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


