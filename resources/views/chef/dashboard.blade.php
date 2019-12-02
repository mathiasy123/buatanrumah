@extends('chef_layout.master_dashboard')

@section('title', 'Pemasak | Dashboard')

@section('chef_content')
<div class="content">
    <div class="column is-10-desktop is-offset-2-desktop is-9-tablet is-offset-3-tablet is-12-mobile">
        <div class="p-1">
            
            <!-- Title Dashboard Section  -->
            <div class="columns is-variable is-desktop">
                <div class="column">
                    <h1 class="title">Panel Data</h1>
                </div>
            </div>
            <!-- End Title Dashboard Section  -->

            <!-- Panel Dashboard Section  -->
            <div class="columns is-variable is-desktop">
                <div class="column">
                    <div class="card has-background-primary has-text-white">
                        <div class="card-header">
                            <div class="card-header-title has-text-white">
                                Data Makanan
                            </div>
                        </div>
                        <div class="card-content">
                            <p class="is-size-3">Total: {{ $count_food }}</p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card has-background-danger has-text-white">
                        <div class="card-header">
                            <div class="card-header-title has-text-white">
                                Data Pemesanan
                            </div>
                        </div>
                        <div class="card-content">
                            <p class="is-size-3">Total: {{ $count_order }}</p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card has-background-info has-text-white">
                        <div class="card-header">
                            <div class="card-header-title has-text-white">
                                Data Pemesanan Yang Selesai
                            </div>
                        </div>
                        <div class="card-content">
                            <p class="is-size-3">Total: {{ $count_finished_order }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Panel Dashboard Section  -->

            <!-- Title Chef's Food Table -->
            <div class="columns is-variable is-desktop">
                <div class="column">
                    <div class="level">
                        <div class="level-left">
                            <h1 class="title">Data Makanan</h1>
                        </div>
                        <div class="level-right">
                            <a href="/pemasak/makanan" class="button overview-detail is-link is-rounded">Lihat Lebih Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Title Chef's Food Table -->

            <!-- Chef's Food Table -->
            <div class="columns is-variable is-desktop">
                <div class="column">
                    <div class="table-container">
                        <table class="table table-data is-hoverable is-fullwidth">
                            <thead>
                                <th>#</th>
                                <th>Pemilik Makanan</th>
                                <th>Nama Makanan</th>
                                <th>Rating Makanan</th>
                                <th>Deskripsi Makanan</th>
                                <th>Harga Makanan</th>
                            </thead>
                            <tbody>

                                @foreach($foods as $food)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ ucwords($food->food_name) }}</td>
                                    <td>{{ $food->rating }}</td>
                                    <td>{{ $food->description }}</td>
                                    <td>{{ $food->price }}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End Chef's Food Table -->

            <!-- Title Chef's Order Table -->
            <div class="columns is-variable is-desktop">
                <div class="column">
                    <div class="level">
                        <div class="level-left">
                            <h1 class="title">Data Pemesanan</h1>
                        </div>
                        <div class="level-right">
                            <a href="/pemasak/pemesanan" class="button overview-detail is-link is-rounded">Lihat Lebih Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Title Chef's Order Table -->

            <!-- Chef's Order Table -->
            <div class="columns is-variable is-desktop">
                <div class="column">
                    <div class="table-container">
                        <table class="table table-data is-hoverable is-fullwidth">
                            <thead>
                                <th>#</th>
                                <th>Kode Pemesanan</th>
                                <th>Nama Pemesan</th>
                                <th>Jumlah</th>
                                <th>Total Harga Pemesanan</th>
                            </thead>
                            <tbody>

                                @foreach($finished_orders as $finished_order)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ ucwords($finished_order->order_code) }}</td>
                                    <td>{{ $finished_order->customer_name }}</td>
                                    <td>{{ $finished_order->quantity }}</td>
                                    <td>{{ $finished_order->total_price }}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End Chef's Order Table -->

            <!-- Title Chef's Order Table -->
            <div class="columns is-variable is-desktop">
                <div class="column">
                    <div class="level">
                        <div class="level-left">
                            <h1 class="title">Data Pemesanan Yang Selesai</h1>
                        </div>
                        <div class="level-right">
                            <a href="/pemasak/pemesanan-selesai" class="button overview-detail is-link is-rounded">Lihat Lebih Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Title Chef's Order Table -->

            <!-- Chef's Order Table -->
            <div class="columns is-variable is-desktop">
                <div class="column">
                    <div class="table-container">
                        <table class="table table-data is-hoverable is-fullwidth">
                            <thead>
                                <th>#</th>
                                <th>Kode Pemesanan</th>
                                <th>Nama Pemesan</th>
                                <th>Jumlah</th>
                                <th>Total Harga Pemesanan</th>
                            </thead>
                            <tbody>

                                @foreach($orders as $order)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ ucwords($order->order_code) }}</td>
                                    <td>{{ $order->customer_name }}</td>
                                    <td>{{ $order->quantity }}</td>
                                    <td>{{ $order->total_price }}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End Chef's Order Table -->

        </div>
    </div>
</div>
@endsection

