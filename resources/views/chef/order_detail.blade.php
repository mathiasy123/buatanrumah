@extends('chef_layout.master')

@section('title', 'Jessica Doe | Detail Pemesanan')

@section('chef_content')
<div class="content">
    <div class="column is-10-desktop is-offset-2-desktop is-9-tablet is-offset-3-tablet is-12-mobile">
        <div class="p-1">
            
            <!-- Title Order Detail -->
            <div class="columns is-variable is-desktop">
                <div class="column">
                    <div class="level">
                        <div class="level-left">
                            <div class="level-item">
                                <h1 class="title">Detail Pemesanan</h1>
                            </div>
                        </div>
                        <div class="level-right">
                            <div class="level-item">
                                <a href="/pemasak/pemesanan" class="button is-danger is-fullwidth-mobile is-fullwidth-tablet">
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
                    <h3 class="has-text-centered">Detail Pesanan Makanan</h3>
                </div>
            </div>
            <!-- End Title Food Detail -->

            <!-- Food Detail -->
            <div class="column is-variable is-desktop">
                <div class="columns">

                    <div class="column is-6">
                        <figure class="image is-square">
                            <img src="{{ asset('user_assets/images/food/' . $order_details->user_id . '/' . $order_details->food->image) }}">
                        </figure>
                    </div>

                    <div class="column is-6">
                        <h1>{{ strtoupper($order_details->food->food_name) }}</h1>
                        <progress class="progress is-small is-warning" value="100"></progress>

                        <h5>DESKRIPSI</h5>
                        <p>{{ $order_details->food->description }}</p>

                        <h5>RATING ({{ $order_details->food->rating }} / 10)</h5>

                        @php $rating = $order_details->food->rating @endphp

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
                        <p>Rp {{ number_format($order_details->food->price) }}</p>
                    </div>

                </div>
            </div>
            <!-- End Food Detail -->

            <!-- Title Customer Detail -->
            <div class="columns is-variable is-desktop">
                <div class="column">
                    <h3 class="has-text-centered space-top">Detail Pemesan</h3>
                    <progress class="progress is-small is-warning" value="100"></progress>
                </div>
            </div>
            <!-- End Title Customer Detail -->

            <!-- Customer Detail -->
            <div class="column is-variable is-desktop">
                <div class="columns">

                    <div class="column is-6">
                        <h5>Kode pemesanan:</h5> <p>{{ strtoupper($order_details->order_code) }}</p>

                        <h5>Nama pemesan:</h5> <p>{{ ucwords($order_details->customer_name) }}</p>

                        <h5>Nomor telepon (WA) pemesan:</h5> <p>{{ $order_details->customer_phone }}</p>
                    </div>

                    <div class="column is-6">
                        <h5>Alamat rumah pemesanan:</h5> <p>{{ $order_details->customer_address }}</p>

                        <h5>Jumlah yang dipesan:</h5> <p>{{ $order_details->quantity }}</p>

                        <h5>Total harga pemesanan:</h5> <p>Rp. {{ number_format($order_details->total_price) }}</p>
                        
                    </div>

                </div>
            </div>
            <!-- End Customer Detail -->

        </div>
    </div>
</div>
@endsection