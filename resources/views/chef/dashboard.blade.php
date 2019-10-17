@extends('chef_layout.master_dashboard')

@section('title', 'Jessica Doe | Dashboard')

@section('chef_content')
<!-- Panel Section -->
<section class="setion overview" id="overview">
    <div class="container is-fluid">
        <div class="container">
            <div class="columns">
                <div class="column is-6">
                    <div class="box has-background-success">
                        <div class="columns is-gapless is-mobile">
                            <div class="column is-6">
                                <i class="fas fa-cart-arrow-down fa-5x has-text-light"></i>
                            </div>
                            <div class="column is-6 has-text-light">
                                <h3 class="is-size-3"><b>Order</b></h3>
                                <p class="is-size-5">TOTAL : {{ $count_order }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-6">
                    <div class="box has-background-primary">
                        <div class="columns is-gapless is-mobile">
                            <div class="column is-6">
                                <i class="fas fa-utensils fa-5x has-text-light"></i>
                            </div>
                            <div class="column is-6 has-text-light">
                                <h3 class="is-size-3"><b>Makanan</b></h3>
                                <p class="is-size-5">TOTAL : {{ $count_food }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Panel Section -->

<!-- Tabel Data Section -->
<section class="section tabel-data" id="tabel-data">
    <div class="container is-fluid">
        <div class="columns container is-fluid">
            <div class="column is-12">
                <h5 class="is-size-5 is-pulled-left">Data Makanan</h5>
                <a href="/food" class="button overview-detail is-link is-rounded is-pulled-right">Lihat Lebih Detail</a>
                <table class="table is-hoverable is-fullwidth">
                    <thead>
                        <th>#</th>
                        <th>Nama Makanan</th>
                        <th>Rating Makanan</th>
                        <th>Harga Makanan</th>
                        <th>Deskripsi Makanan</th>
                    </thead>
                    <tbody>

                        @foreach($foods as $food)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $food->food_name }}</td>
                            <td>{{ $food->rating }}</td>
                            <td>{{ $food->price }}</td>
                            <td>{{ $food->description }}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- End Tabel Data Section -->

<!-- Tabel Data Section -->
<section class="section tabel-data" id="tabel-data">
    <div class="container is-fluid">
        <div class="columns container is-fluid">
            <div class="column is-12">
                <h5 class="is-size-5 is-pulled-left">Data Pemesanan</h5>
                <a href="/order" class="button overview-detail is-link is-rounded is-pulled-right">Lihat Lebih Detail</a>
                <table class="table is-hoverable is-fullwidth">
                    <thead>
                        <th>#</th>
                        <th>Kode Order</th>
                        <th>Tanggal Order</th>
                    </thead>
                    <tbody>

                        @foreach($orders as $order)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ strtoupper($order->order_code) }}</td>
                            <td>{{ $order->created_at }}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- End Tabel Data Section -->
@endsection