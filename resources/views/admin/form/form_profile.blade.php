@extends('admin_layout.master')

@section('title', 'Admin CMS | Kelola Profil Pemasak')

@section('admin_content')
<div class="content">
    <div class="column is-10-desktop is-offset-2-desktop is-9-tablet is-offset-3-tablet is-12-mobile">
        <div class="p-1">
            
            <!-- Title Form Page -->
            <div class="columns is-variable is-desktop">
                <div class="column">
                    <div class="level">
                        <div class="level-left">
                            <div class="level-item">
                                <h1 class="title">Kelola Profil Pemasak</h1>
                            </div>
                        </div>
                        <div class="level-right">
                            <div class="level-item">
                                <a href="/admin/pemasak-profil" class="button is-danger is-fullwidth-mobile is-fullwidth-tablet">
                                    <span class="icon">
                                        <i class="fas fa-undo"></i>
                                    </span>
                                    <span>Kembali</span>
                                </a>
                            </div>     
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Title Form Page -->

            @if($action_type == 'tambah')
            <!-- Add Food Form Section -->
            <div class="columns is-variable is-desktop">
                <div class="column">
                    <div class="card has-background-light">
                        <div class="card-header">
                            <div class="card-header-title">
                                <p class="is-size-5">Form Tambah Profil Pemasak</p> 
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="content">
                                
                                <p>Form ini adalah untuk menambahkan profil pemasak</p>

                                <div class="content">
                                    <form method="post" action="{{ url()->current() }}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="field">
                                            <label class="label">Pemilik Profil</label>
                                            <div class="control">
                                                <div class="select @error('pemilik_profil') is-danger @enderror">
                                                    <select name="pemilik_profil">
                                                        <option selected disabled>-- Pilih Nama Pemilik Profil --</option>

                                                        @foreach($chefs as $chef)

                                                        <option value="{{ $chef->id }}" {{ (old('pemilik_profil') == $chef->id) ? 'selected' : '' }}>{{ ucwords($chef->name) }}</option>

                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                            @error('pemilik_profil')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="field">
                                            <label class="label">Judul Hero</label>
                                            <div class="control">
                                                <input class="input @error('judul_hero') is-danger @enderror" name="judul_hero" value="{{ old('judul_hero') }}" type="text" placeholder="Masukkan Judul Hero">
                                            </div>
                                            @error('judul_hero')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="field">
                                            <label class="label">Subjudul Hero</label>
                                            <div class="control">
                                                <input class="input @error('subjudul_hero') is-danger @enderror" name="subjudul_hero" value="{{ old('subjudul_hero') }}" type="text" placeholder="Masukkan Sub Judul Hero">
                                            </div>
                                            @error('subjudul_hero')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="field">
                                            <label class="label">Nama Usaha Katering</label>
                                            <div class="control">
                                                <input class="input @error('nama_katering') is-danger @enderror" name="nama_katering" value="{{ old('nama_katering') }}" type="text" placeholder="Masukkan Nama Usaha Katering">
                                            </div>
                                            @error('nama_katering')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="field">
                                            <label class="label">Judul Tentang Pemasak</label>
                                            <div class="control">
                                                <input class="input @error('judul_tentang') is-danger @enderror" name="judul_tentang" value="{{ old('judul_tentang') }}" type="text" placeholder="Masukkan Judul Tentang Pemasak">
                                            </div>
                                            @error('judul_tentang')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="field">
                                            <label class="label">Teks Tentang Pemasak</label>
                                            <div class="control">
                                                <textarea class="textarea @error('teks_tentang') is-danger @enderror" name="teks_tentang">{{ old('teks_tentang') }}</textarea>
                                            </div>
                                            @error('teks_tentang')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="field">
                                            <label class="label">Gambar Hero (File harus berupa format gambar dan maksimal 5 MB)</label> 
                                            <div class="file has-name is-fullwidth @error('gambar_hero') is-danger @enderror">
                                                <label class="file-label">
                                                    <input class="file-input hero-file" type="file" name="gambar_hero">
                                                    <span class="file-cta">
                                                        <span class="file-icon">
                                                            <i class="fas fa-upload"></i>
                                                        </span>
                                                        <span class="file-label">
                                                            Pilih file gambar . . .  
                                                        </span>
                                                    </span>
                                                    <span class="file-name">
                                                        <span class="file-name-hero"></span>
                                                    </span>
                                                </label>
                                            </div>
                                            @error('gambar_hero')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                            <figure class="image is-4by3">
                                                <img class="new-media-hero" src="https://bulma.io/images/placeholders/480x480.png">
                                            </figure>
                                        </div>

                                        <div class="field">
                                            <label class="label">Foto Tentang Pemasak (File harus berupa format gambar dan maksimal 5 MB)</label> 
                                            <div class="file has-name is-fullwidth @error('gambar_tentang') is-danger @enderror">
                                                <label class="file-label">
                                                    <input class="file-input about-file" type="file" name="gambar_tentang">
                                                    <span class="file-cta">
                                                        <span class="file-icon">
                                                            <i class="fas fa-upload"></i>
                                                        </span>
                                                        <span class="file-label">
                                                            Pilih file gambar . . .  
                                                        </span>
                                                    </span>
                                                    <span class="file-name">
                                                        <span class="file-name-about"></span>
                                                    </span>
                                                </label>
                                            </div>
                                            @error('gambar_tentang')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                            <figure class="image is-4by3">
                                                <img class="new-media-about" src="https://bulma.io/images/placeholders/480x480.png">
                                            </figure>
                                        </div>

                                        <button type="submit" class="button is-info is-medium is-rounded is-fullwidth">Tambah Profil Pemasak</button>

                                    </form>
                                </div>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Add Food Form Section -->

            @else
            <!-- Edit Food Form Section -->
            <div class="columns is-variable is-desktop">
                <div class="column">
                    <div class="card has-background-light">
                        <div class="card-header">
                            <div class="card-header-title">
                                <p class="is-size-5">Form Ubah Makanan Pemasak</p> 
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="content">
                                
                                <p>Form ini adalah untuk mengubah/meng-update profil pemasak</p>

                                <div class="content">
                                    <form method="post" action="/admin/ubah/pemasak-profil" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <input type="hidden" name="profile_id" value="{{ $profile->id }}">

                                        <div class="field">
                                            <label class="label">Pemilik Profil</label>
                                            <div class="control">
                                                <div class="select @error('pemilik_profil') is-danger @enderror">
                                                    <select name="pemilik_profil">
                                                        <option selected disabled>-- Pilih Nama Pemilik Profil --</option>

                                                        @foreach($chefs as $chef)

                                                        <option value="{{ $chef->id }}" {{ ($profile->user_id == $chef->id) ? 'selected' : '' }}>{{ $chef->name }}</option>

                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                            @error('pemilik_profil')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="field">
                                            <label class="label">Judul Hero</label>
                                            <div class="control">
                                                <input class="input @error('judul_hero') is-danger @enderror" name="judul_hero" value="{{ (old('judul_hero')) ? old('judul_hero') : ucwords($profile->title_hero) }}" type="text" placeholder="Masukkan Judul Hero">
                                            </div>
                                            @error('judul_hero')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="field">
                                            <label class="label">Subjudul Hero</label>
                                            <div class="control">
                                                <input class="input @error('subjudul_hero') is-danger @enderror" name="subjudul_hero" value="{{ (old('subjudul_hero')) ? old('subjudul_hero') : ucwords($profile->subtitle_hero) }}" type="text" placeholder="Masukkan Sub Judul Hero">
                                            </div>
                                            @error('subjudul_hero')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="field">
                                            <label class="label">Nama Usaha Katering</label>
                                            <div class="control">
                                                <input class="input @error('nama_katering') is-danger @enderror" name="nama_katering" value="{{ (old('nama_katering')) ? old('nama_katering') : ucwords($profile->cathering_name) }}" type="text" placeholder="Masukkan Nama Usaha Katering">
                                            </div>
                                            @error('nama_katering')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="field">
                                            <label class="label">Judul Tentang Pemasak</label>
                                            <div class="control">
                                                <input class="input @error('judul_tentang') is-danger @enderror" name="judul_tentang" value="{{ (old('judul_tentang')) ? old('judul_tentang') : ucwords($profile->title_about) }}" type="text" placeholder="Masukkan Judul Tentang Pemasak">
                                            </div>
                                            @error('judul_tentang')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="field">
                                            <label class="label">Teks Tentang Pemasak</label>
                                            <div class="control">
                                                <textarea class="textarea @error('teks_tentang') is-danger @enderror" name="teks_tentang">{{ (old('teks_tentang')) ? old('teks_tentang') : ucwords($profile->text_about) }}</textarea>
                                            </div>
                                            @error('teks_tentang')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="field">
                                            <label class="label">Gambar Hero Sekarang</label>
                                            <figure class="image is-4by3">
                                                <img src="{{ asset('user_assets/images/content/' . $profile->user_id . '/' . $profile->hero_image) }}">
                                            </figure>
                                        </div>

                                        <div class="field">
                                            <label class="label">Gambar Hero Baru (File harus berupa format gambar dan maksimal 5 MB)</label> 
                                            <div class="file has-name is-fullwidth @error('gambar_hero') is-danger @enderror">
                                                <label class="file-label">
                                                    <input class="file-input hero-file" type="file" name="gambar_hero">
                                                    <span class="file-cta">
                                                        <span class="file-icon">
                                                            <i class="fas fa-upload"></i>
                                                        </span>
                                                        <span class="file-label">
                                                            Pilih file gambar . . .  
                                                        </span>
                                                    </span>
                                                    <span class="file-name">
                                                        <span class="file-name-hero"></span>
                                                    </span>
                                                </label>
                                            </div>
                                            @error('gambar_hero')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                            <figure class="image is-4by3">
                                                <img class="new-media-hero" src="https://bulma.io/images/placeholders/480x480.png">
                                            </figure>
                                        </div>

                                        <div class="field">
                                            <label class="label">Foto Tentang Pemasak Sekarang</label>
                                            <figure class="image is-4by3">
                                                <img src="{{ asset('user_assets/images/content/' . $profile->user_id . '/' . $profile->about_image) }}">
                                            </figure>
                                        </div>

                                        <div class="field">
                                            <label class="label">Foto Tentang Pemasak Baru (File harus berupa format gambar dan maksimal 5 MB)</label> 
                                            <div class="file has-name is-fullwidth @error('gambar_tentang') is-danger @enderror">
                                                <label class="file-label">
                                                    <input class="file-input about-file" type="file" name="gambar_tentang">
                                                    <span class="file-cta">
                                                        <span class="file-icon">
                                                            <i class="fas fa-upload"></i>
                                                        </span>
                                                        <span class="file-label">
                                                            Pilih file gambar . . .  
                                                        </span>
                                                    </span>
                                                    <span class="file-name">
                                                        <span class="file-name-about"></span>
                                                    </span>
                                                </label>
                                            </div>
                                            @error('gambar_tentang')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                            <figure class="image is-4by3">
                                                <img class="new-media-about" src="https://bulma.io/images/placeholders/480x480.png">
                                            </figure>
                                        </div>

                                        <button type="submit" class="button is-info is-medium is-rounded is-fullwidth">Ubah Profil Pemasak</button>

                                    </form>
                                </div>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Edit Food Form Section -->
            @endif

        </div>
    </div>
</div>
@endsection


