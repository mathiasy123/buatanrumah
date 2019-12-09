@extends('admin_layout.master')

@section('title', 'Admin CMS | Kelola Makanan Pemasak')

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
                                <h1 class="title">Kelola Makanan Pemasak</h1>
                            </div>
                        </div>
                        <div class="level-right">
                            <div class="level-item">
                                <a href="/admin/pemasak-makanan" class="button is-danger is-fullwidth-mobile is-fullwidth-tablet">
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
                                <p class="is-size-5">Form Tambah Makanan Pemasak</p> 
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="content">
                                
                                <p>Form ini adalah untuk menambahkan data makanan pemasak</p>

                                <div class="content">
                                    <form method="post" action="{{ url()->current() }}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="field">
                                            <label class="label">Nama Pemilik Makanan</label>
                                            <div class="control">
                                                <div class="select @error('pemilik_makanan') is-danger @enderror">
                                                    <select name="pemilik_makanan">
                                                        <option selected disabled>-- Pilih Nama Pemilik Makanan --</option>

                                                        @foreach($chefs as $chef)

                                                        <option value="{{ $chef->id }}" {{ (old('pemilik_makanan') == $chef->id) ? 'selected' : '' }}>{{ ucwords($chef->name) }}</option>

                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                            @error('pemilik_makanan')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="field">
                                            <label class="label">Nama Makanan</label>
                                            <div class="control">
                                                <input class="input @error('nama_makanan') is-danger @enderror" name="nama_makanan" value="{{ old('nama_makanan') }}" type="text" placeholder="Masukkan Nama Makanan">
                                            </div>
                                            @error('nama_makanan')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="field">
                                            <label class="label">Rating Makanan</label>
                                            <div class="control">
                                                <div class="select @error('rating') is-danger @enderror">
                                                    <select name="rating">
                                                        <option selected disabled>-- Pilih Rating Makanan --</option>

                                                        @for($rating = 1; $rating <= 10; $rating++)
                                                        <option value="{{ $rating }}" {{ (old('rating') == $rating) ? 'selected' : '' }}>{{ $rating }}</option>
                                                        @endfor

                                                    </select>
                                                </div>
                                            </div>
                                            @error('rating')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="field">
                                            <label class="label">Deskripsi Makanan</label>
                                            <div class="control">
                                                <textarea class="textarea @error('desk_makanan') is-danger @enderror" name="desk_makanan">{{ old('desk_makanan') }}</textarea>
                                            </div>
                                            @error('desk_makanan')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="field">
                                            <label class="label">Harga Makanan (IDR)</label>
                                            <div class="control">
                                                <input class="input @error('harga_makanan') is-danger @enderror" name="harga_makanan" value="{{ old('harga_makanan') }}" type="number" placeholder="Masukkan Harga Makanan">
                                            </div>
                                            @error('harga_makanan')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="field">
                                            <label class="label">Foto Makanan (File harus berupa format gambar dan maksimal 5 MB)</label> 
                                            <div class="file has-name is-fullwidth @error('gambar_makanan') is-danger @enderror">
                                                <label class="file-label">
                                                    <input class="file-input food-file" type="file" name="gambar_makanan">
                                                    <span class="file-cta">
                                                        <span class="file-icon">
                                                            <i class="fas fa-upload"></i>
                                                        </span>
                                                        <span class="file-label">
                                                            Pilih file gambar . . .  
                                                        </span>
                                                    </span>
                                                    <span class="file-name">
                                                        <span class="file-name-food"></span>
                                                    </span>
                                                </label>
                                            </div>
                                            @error('gambar_makanan')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                            <figure class="image is-4by3">
                                                <img class="new-media-food" src="https://bulma.io/images/placeholders/480x480.png">
                                            </figure>
                                        </div>

                                        <button type="submit" class="button is-info is-medium is-rounded is-fullwidth">Tambah Makanan</button>

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
                                
                                <p>Form ini adalah untuk mengubah/meng-update data makanan pemasak</p>

                                <div class="content">
                                    <form method="post" action="/admin/ubah/pemasak-makanan" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <input type="hidden" name="food_id" value="{{ $foods->id }}">

                                        <div class="field">
                                            <label class="label">Nama Pemilik Makanan</label>
                                            <div class="control">
                                                <div class="select @error('pemilik_makanan') is-danger @enderror">
                                                    <select name="pemilik_makanan">
                                                        <option selected disabled>-- Pilih Nama Pemilik Makanan --</option>

                                                        @foreach($chefs as $chef)
                                                        <option value="{{ $chef->id }}" {{ ($foods->user_id == $chef->id) ? 'selected' : '' }}>{{ ucwords($chef->name) }}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                            @error('pemilik_makanan')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="field">
                                            <label class="label">Nama Makanan</label>
                                            <div class="control">
                                                <input class="input @error('nama_makanan') is-danger @enderror" name="nama_makanan" value="{{ (old('nama_makanan')) ? old('nama_makanan') : ucwords($foods->food_name) }}" type="text" placeholder="Masukkan Nama Makanan">
                                            </div>
                                            @error('nama_makanan')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="field">
                                            <label class="label">Rating Makanan</label>
                                            <div class="control">
                                                <div class="select @error('rating') is-danger @enderror">
                                                    <select name="rating">
                                                        <option selected disabled>-- Pilih Rating Makanan --</option>

                                                        @for($rating = 1; $rating <= 10; $rating++)
                                                        <option value="{{ $rating }}" {{ ($foods->rating == $rating) ? 'selected' : '' }}>{{ $rating }}</option>
                                                        @endfor

                                                    </select>
                                                </div>
                                            </div>
                                            @error('rating')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="field">
                                            <label class="label">Deskripsi Makanan</label>
                                            <div class="control">
                                                <textarea class="textarea @error('desk_makanan') is-danger @enderror" name="desk_makanan">{{ (old('desk_makanan')) ? old('desk_makanan') : $foods->description }}</textarea>
                                            </div>
                                            @error('desk_makanan')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="field">
                                            <label class="label">Harga Makanan (IDR)</label>
                                            <div class="control">
                                                <input class="input @error('harga_makanan') is-danger @enderror" name="harga_makanan" value="{{ (old('harga_makanan')) ? old('harga_makanan') : $foods->price }}" type="number" placeholder="Masukkan Harga Makanan">
                                            </div>
                                            @error('harga_makanan')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="field">
                                            <label class="label">Foto Makanan Sekarang</label>
                                            <figure class="image is-4by3">
                                                <img src="{{ asset('user_assets/images/food/' . $foods->user_id . '/' . $foods->image) }}">
                                            </figure>
                                        </div>

                                        <div class="field">
                                            <label class="label">Foto Makanan Baru (File harus berupa format gambar dan maksimal 5 MB)</label> 
                                            <div class="file has-name is-fullwidth @error('gambar_makanan') is-danger @enderror">
                                                <label class="file-label">
                                                    <input class="file-input food-file" type="file" name="gambar_makanan">
                                                    <span class="file-cta">
                                                        <span class="file-icon">
                                                            <i class="fas fa-upload"></i>
                                                        </span>
                                                        <span class="file-label">
                                                            Pilih file gambar . . .  
                                                        </span>
                                                    </span>
                                                    <span class="file-name">
                                                        <span class="file-name-food"></span>
                                                    </span>
                                                </label>
                                            </div>
                                            @error('gambar_makanan')
                                            <p class="help is-danger">{{ $message }}</p>
                                            @enderror
                                            <figure class="image is-4by3">
                                                <img class="new-media-food" src="https://bulma.io/images/placeholders/480x480.png">
                                            </figure>
                                        </div>

                                        <button type="submit" class="button is-info is-medium is-rounded is-fullwidth">Ubah Makanan</button>

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


