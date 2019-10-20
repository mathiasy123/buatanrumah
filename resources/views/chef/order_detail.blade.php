@extends('chef_layout.master_dashboard')

@section('title', 'Jessica Doe | Detail Pemesanan')

@section('chef_content')
<!-- Informasi Makanan Section -->
<section class="section tabel-order" id="tabel-order">
    <h1 class="title rekom-title">Informasi Makanan</h1>
    <div class="container">
        <div class="columns">
            <div class="column is-6">
                <figure class="image is-square">
                    <img src="{{ asset('chef_images/frontend/' . $order_detail->image) }}">
                </figure>
            </div>
            <div class="column is-6">
                <div class="content">
                    <h1>{{ strtoupper($order_detail->food_name) }}</h1>
                    <progress class="progress is-small is-warning" value="100"></progress>

                    <h5>DESKRIPSI</h5>
                    <p>{{ $order_detail->description }}</p>
                    <p>{{ $order_detail->description }}</p>

                    <h5>RATING ({{ $order_detail->rating }} / 10)</h5>
                    @if($order_detail->rating == 1)
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
                    @elseif($order_detail->rating == 2)
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
                    @elseif($order_detail->rating == 3)
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
                    @elseif($order_detail->rating == 4)
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
                    @elseif($order_detail->rating == 5)
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
                    @elseif($order_detail->rating == 6)
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
                    @elseif($order_detail->rating == 7)
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
                    @elseif($order_detail->rating == 8)
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
                    @elseif($order_detail->rating == 9)
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
                    @elseif($order_detail->rating == 10)
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
                    <p>Rp {{ number_format($order_detail->price) }}</p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Informasi Makanan Section -->

<!-- Tabel Data Section -->
<section class="section customer-info" id="customer-info">
    <h1 class="title rekom-title">Informasi Pelanggan</h1>
    <div class="container">
        <div class="columns">
            <div class="column is-12">
                <div class="content">
                    <h1>Kode : {{ strtoupper($order_detail->order_code) }}</h1>
                    <progress class="progress is-small is-warning" value="100"></progress>
                </div>
            </div>
        </div>
        <div class="columns">
            <div class="column is-6">
                <div class="content">
                    <h5>Nama Pelanggan : </h5>
                    <p>{{ ucwords($order_detail->customer_name) }}</p>

                    <h5>Nomor Telepon : </h5>
                    <p>{{ $order_detail->customer_phone }}</p>

                    <h5>Alamat Rumah : </h5>
                    <p>{{ ucwords($order_detail->customer_address) }}</p>
                </div>
            </div>
            <div class="column is-6">
                <div class="content">
                    <h5>Jumlah Pemesanan : </h5>
                    <p>{{ $order_detail->quantity }}</p>

                    <h5>Harga Makanan : </h5>
                    <p>Rp {{ number_format($order_detail->price) }}</p>

                    <h5>Total : </h5>
                    <p>Rp {{ number_format($order_detail->total_price) }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection