@extends('chef_layout.master_order')

@section('title', 'Jessica Doe | Order Form')

@section('chef_content')
<!-- Form Pemesanan -->
<section class="section" id="form-order">
    <h1 class="title rekom-title">Masakan</h1>
    <div class="container">
        <div class="columns">
            <div class="column is-6">
                <figure class="image is-square">
                    <img src="{{ asset('chef_images/frontend/' . $food->image) }}">
                </figure>
            </div>
            <div class="column is-6">
                <div class="content">
                    <h1>{{ strtoupper($food->food_name) }}</h1>
                    <progress class="progress is-small is-warning" value="100"></progress>

                    <h5>DESKRIPSI</h5>
                    <p>{{ $food->description }}</p>
                    <p>{{ $food->description }}</p>

                    <h5>RATING ({{ $food->rating }} / 10)</h5>
                    @if($food->rating == 1)
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    @elseif($food->rating == 2)
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    @elseif($food->rating == 3)
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    @elseif($food->rating == 4)
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    @elseif($food->rating == 5)
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    @elseif($food->rating == 6)
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    @elseif($food->rating == 7)
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    @elseif($food->rating == 8)
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    @elseif($food->rating == 9)
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star"></i>
                    @elseif($food->rating == 10)
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    <i class="fas fa-star checked"></i>
                    @else
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    @endif

                    <br><br><h5>HARGA</h5>
                    <p>Rp {{ number_format($food->price) }}</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Form Pemesanan -->

<!-- Detail Makanan Section -->
<section class="section" id="form-order">
    <h1 class="title rekom-title">FORM PEMESANAN</h1>
    <div class="container">
        <div class="columns">
            <div class="column is-12">
                <div class="content">
                    <h5>* Harap isi form pemesanan dengan lengkap untuk melakukan pemesanan</h5>
                    <form method="post" action="/order/store">
                        @csrf
                        <input type="hidden" name="food_id" value="{{ $food->food_id }}">
                        <input type="hidden" name="user_id" value="{{ $food->user_id }}">
                        <div class="field">
                            <label class="label">Nama Anda</label>
                            <div class="control">
                                <input class="input @error('nama') is-danger @enderror" name="nama" value="{{ old('nama') }}"  type="text" placeholder="Masukkan Nama Anda">
                            </div>
                            @error('nama')
                            <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="field">
                            <label class="label">Nomor Telepon Anda</label>
                            <div class="control">
                                <input class="input @error('nomor_telepon') is-danger @enderror" name="nomor_telepon" value="{{ old('nomor_telepon') }}" type="number" placeholder="Masukkan Nomor Telepon Anda">
                            </div>
                            @error('nomor_telepon')
                            <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="field">
                            <label class="label">Alamat Rumah Anda</label>
                            <div class="control">
                                <input class="input @error('alamat_rumah') is-danger @enderror" name="alamat_rumah" value="{{ old('alamat_rumah') }}" type="text" placeholder="Masukkan Alamat Rumah Anda">
                            </div>
                            @error('alamat_rumah')
                            <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="field">
                            <label class="label">Jumlah Pemesanan (pcs)</label>
                            <div class="control">
                                <input class="input @error('quantity') is-danger @enderror" name="jumlah" value="{{ old('jumlah') }}"  type="number" placeholder="Masukkan Jumlah Pemesanan">
                            </div>
                            @error('jumlah')
                            <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="field">
                            <label class="label">Harga Per Pemesanan (Rp)</label>
                            <div class="control">
                                <input class="input" name="harga" value="{{ $food->price }}" readonly>
                            </div>
                        </div>
                        <div class="level-right">
                            <button type="submit" class="button button-order is-success is-medium is-rounded">Pesan Sekarang</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Detail Makanan Section -->
@endsection