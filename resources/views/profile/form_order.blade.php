@extends('profile_layout.master_order')

@section('title', $profile->user->name . ' | Pemesanan Makanan')

@section('profile_content')
<div class="content">
    <div class="column is-12">
        <div class="container">
            <!-- Title Order Detail -->
            <div class="columns is-variable is-desktop p-1">
                <div class="column">
                    <div class="level">
                        <div class="level-left">
                            <div class="level-item">
                                <h1 class="title">Detail Makanan</h1>
                            </div>
                        </div>
                        <div class="level-right">
                            <div class="level-item">
                                <a href="/pemasak/profil/{{ $food->user_id }}" class="button is-danger fullwidth-button">
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
            <!-- End Title Order Detail -->

            <!-- Title Food Detail -->
            <div class="columns is-variable is-desktop">
                <div class="column">
                    <h3 class="has-text-centered">Form Pemesanan Makanan</h3>
                </div>
            </div>
            <!-- End Title Food Detail -->

            <!-- Food Detail -->
            <div class="column is-variable is-desktop">
                <div class="columns">

                    <div class="column is-6">
                        <figure class="image is-square">
                            <img src="{{ asset('user_assets/images/food/' . $food->user_id . '/' . $food->image) }}">
                        </figure>
                    </div>

                    <div class="column is-6">
                        <h1 class="has-text-centered-mobile">{{ strtoupper($food->food_name) }}</h1>
                        <progress class="progress is-small is-warning" value="100"></progress>

                        <h5>DESKRIPSI</h5>
                        <p>{{ $food->description }}</p>

                        <h5>RATING ({{ $food->rating }} / 10)</h5>

                        @php $rating = $food->rating @endphp

                        @foreach(range(1, 10) as $rate)

                            <span>

                                @if($rating >= 1)

                                    <i class="fas fa-star checked"></i>

                                @else
                                
                                    <i class="fas fa-star"></i>

                                @endif

                            @php $rating-- @endphp

                            </span>

                        @endforeach

                        <br><br><h5>HARGA</h5>
                        <p>Rp {{ number_format($food->price) }}</p>
                    </div>

                </div>
            </div>
            <!-- End Food Detail -->

            <!-- Title Customer Detail -->
            <div class="columns is-variable is-desktop">
                <div class="column">
                    <h3 class="has-text-centered space-top">Form Pemesanan Makanan</h3>
                    <progress class="progress is-small is-warning" value="100"></progress>
                </div>
            </div>
            <!-- End Title Customer Detail -->

            <!-- Customer Detail -->
            <div class="column is-variable is-desktop">
                
                <form action="/pemasak/profil/pesan/makanan" method="post">
                @csrf

                    <input type="hidden" name="user_id" value="{{ $profile->user_id }}">

                    <input type="hidden" name="food_id" value="{{ $food->id }}">

                    <div class="columns">
                        <div class="column is-6">
                            <div class="field">
                                <label class="label">Nama Lengkap</label>
                                <div class="control">
                                    <input class="input" type="text" name="nama_lengkap" value="{{ old('nama_lengkap') }}" placeholder="Nama Lengkap Anda">
                                </div>
                            </div>
                            @error('nama_lengkap')
                            <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="column is-6">
                            <div class="field">
                                <label class="label">Nomor Telepon (WA)</label>
                                <div class="control">
                                    <input class="input" type="number" name="nomor_telp" value="{{ old('nomor_telp') }}" placeholder="Nomor Telepon (WA) Anda">
                                </div>
                            </div>
                            @error('nomor_telp')
                            <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        
                    </div>

                    <div class="columns">
                        <div class="column is-6">
                            <div class="field">
                                <label class="label">Harga Makanan (Rp)</label>
                                <div class="control">
                                    <input class="input" type="number" name="harga_makanan" value="{{ $food->price }}" readonly>
                                </div>
                            </div>
                            @error('harga_makanan')
                            <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="column is-6">
                            <div class="field">
                                <label class="label">Jumlah Pemesanan (PCS)</label>
                                <div class="control">
                                    <input class="input" type="number" name="jumlah" value="{{ old('jumlah') }}" placeholder="Jumlah Pemesanan Anda">
                                </div>
                            </div>
                            @error('jumlah')
                            <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div> 

                    </div>

                    <div class="columns">
                        <div class="column is-12">
                            <div class="field">
                                <label class="label">Alamat Lengkap</label>
                                <div class="control">
                                    <textarea class="textarea" name="alamat" placeholder="Alamat Lengkap Anda">{{ old('alamat') }}</textarea>
                                </div>
                            </div>
                            @error('alamat')
                            <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <button type="submit" class="button is-info is-fullwidth">Pesan Sekarang</button>
                </form>

            </div>
            <!-- End Customer Detail -->

        </div>

    </div>
</div>
@endsection