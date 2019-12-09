@extends('admin_layout.master')

@section('title', 'Admin CMS | Kelola Akun Pemasak')

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
                                <h1 class="title">Kelola Akun Pemasak</h1>
                            </div>
                        </div>
                        <div class="level-right">
                            <div class="level-item">
                                <a href="/admin/pemasak" class="button is-danger is-fullwidth-mobile is-fullwidth-tablet">
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

            <!-- Edit Food Form Section -->
            <div class="columns is-variable is-desktop">
                <div class="column">
                    <div class="card has-background-light">
                        <div class="card-header">
                            <div class="card-header-title">
                                <p class="is-size-5">Form Ubah Akun Pemasak</p> 
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="content">
                                
                                <p>Form ini adalah untuk mengubah/meng-update data akun pemasak</p>

                                <div class="content">
                                    <form method="post" action="/admin/ubah/pemasak" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <input type="hidden" name="user_id" value="{{ $chefs->id }}">

                                        <div class="field">
                                            <label class="label">Nama Pemasak</label>
                                            <div class="control">
                                                <input class="input @error('nama_pemasak') is-danger @enderror" name="nama_pemasak" value="{{ (old('nama_pemasak')) ? old('nama_pemasak') : ucwords($chefs->name) }}" type="text" placeholder="Masukkan Nama Pemasak">
                                            </div>
                                            @error('nama_pemasak')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="field">
                                            <label class="label">Email Pemasak</label>
                                            <div class="control">
                                                <input class="input @error('email_pemasak') is-danger @enderror" name="email_pemasak" value="{{ (old('email_pemasak')) ? old('email_pemasak') : $chefs->email }}" type="text" placeholder="Masukkan Email Pemasak">
                                            </div>
                                            @error('email_pemasak')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="field">
                                            <label class="label">Nomor Telepon (WA) Pemasak</label>
                                            <div class="control">
                                                <input class="input @error('telp_pemasak') is-danger @enderror" name="telp_pemasak" value="{{ (old('telp_pemasak')) ? old('telp_pemasak') : $chefs->phone_call }}" type="number" placeholder="Masukkan Email Pemasak">
                                            </div>
                                            @error('telp_pemasak')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="field">
                                            <label class="label">Alamat Pemasak</label>
                                            <div class="control">
                                                <textarea class="textarea @error('alamat_pemasak') is-danger @enderror" name="alamat_pemasak">{{ (old('alamat_pemasak')) ? old('alamat_pemasak') : $chefs->address }}</textarea>
                                            </div>
                                            @error('alamat_pemasak')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="field">
                                            <label class="label">Instagram Pemasak</label>
                                            <div class="control">
                                                <input class="input @error('ig_pemasak') is-danger @enderror" name="ig_pemasak" value="{{ (old('ig_pemasak')) ? old('ig_pemasak') : $chefs->instagram }}" type="text" placeholder="Masukkan Instagram Pemasak">
                                            </div>
                                            @error('ig_pemasak')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="field">
                                            <label class="label">Foto Pemasak Sekarang</label>
                                            <figure class="image is-4by3">
                                                <img src="{{ asset('user_assets/images/chef/' . $chefs->user_image) }}">
                                            </figure>
                                        </div>

                                        <div class="field">
                                            <label class="label">Foto Pemasak Baru (File harus berupa format gambar dan maksimal 5 MB)</label> 
                                            <div class="file has-name is-fullwidth @error('gambar_makanan') is-danger @enderror">
                                                <label class="file-label">
                                                    <input class="file-input user-file" type="file" name="gambar_pemasak">
                                                    <span class="file-cta">
                                                        <span class="file-icon">
                                                            <i class="fas fa-upload"></i>
                                                        </span>
                                                        <span class="file-label">
                                                            Pilih file gambar . . .  
                                                        </span>
                                                    </span>
                                                    <span class="file-name">
                                                        <span class="file-name-user"></span>
                                                    </span>
                                                </label>
                                            </div>
                                            @error('gambar_pemasak')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                            <figure class="image is-4by3">
                                                <img class="new-media-user" src="https://bulma.io/images/placeholders/480x480.png">
                                            </figure>
                                        </div>

                                        <button type="submit" class="button is-info is-medium is-rounded is-fullwidth">Ubah Akun Pemasak</button>

                                    </form>
                                </div>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection


