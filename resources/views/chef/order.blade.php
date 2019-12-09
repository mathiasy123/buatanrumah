@extends('chef_layout.master')

@section('title', 'Pemasak | Lihat Pemesanan')

@section('chef_content')
<div class="content">
    <div class="column is-10-desktop is-offset-2-desktop is-9-tablet is-offset-3-tablet is-12-mobile">
        <div class="p-1">
            
            <!-- Title Order Table -->
            <div class="columns is-variable is-desktop">
                <div class="column">
                    <h1 class="title">Data Pemesanan</h1>
                </div>
            </div>
            <!-- End Title Order Table -->

            <!-- Search Order Table -->
            <div class="columns is-variable is-desktop">
                <div class="column is-9-desktop is-12-mobile">
                    <form method="post" action="{{ url()->current() }}">
                        @csrf
                        <div class="control has-icons-right">
                            <input class="input is-medium @error('order_keyword') is-danger @enderror" name="order_keyword" type="text" placeholder="Cari Pemesanan Anda">
                            <span class="icon is-right">
                                <i class="fas fa-search"></i>
                            </span>

                            @error('order_keyword')
                            <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </form>
                </div>
                <div class="column is-2-desktop is-12-mobile">
                    <a href="/pemasak/pemesanan" class="button reset-button is-danger is-rounded is-fullwidth-mobile is-medium">Reset Pencarian</a>
                </div>
            </div>
            <!-- End Search Order Table -->

            @if(session('order_notif'))
            <div class="notification is-success">
                <button class="delete"></button>
                {{ @session('order_notif') }}
            </div>
            @endif

            @if(session('order_status'))
            <div class="notification is-success">
                <button class="delete"></button>
                {{ @session('order_status') }}
            </div>
            @endif

            <!-- Order Table -->
            <div class="columns is-variable is-desktop">
                <div class="column">

                    @if(session('order_not_found'))

                    <div class="content">
                        <h3 class="has-text-centered flash-message">-- {{ @session('order_not_found') }} --</h3>
                    </div>

                    @else

                    <div class="table-container">
                        <table class="table table-data is-hoverable is-fullwidth">
                            <thead>
                                <th>#</th>
                                <th>Kode Pemesanan</th>
                                <th>Nama Pemesan</th>
                                <th>Telepon Pemesan</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                
                                @foreach($orders as $index => $order)
                                <tr>
                                    <td>{{ $index + $orders->firstItem() }}</td>
                                    <td>{{ strtoupper($order->order_code) }}</td>
                                    <td>{{ ucwords($order->customer_name) }}</td>
                                    <td>{{ $order->customer_phone }}</td>

                                    <td>
                                        <div class="field is-grouped">
                                            <div class="control">
                                                <a href="/pemasak/detail/pemesanan/{{ $order->id }}" class="button is-info">
                                                    <span class="icon">
                                                        <i class="fas fa-info-circle"></i>
                                                    </span>
                                                    <span>Lihat Detail</span>
                                                </a> 
                                            </div>

                                            <div class="control">
                                                <form action="/pemasak/ubah/pemesanan/{{ $order->id }}" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    
                                                    <button type="submit" class="button is-success" {{ ($order->finished == 1) ? 'disabled' : '' }}>
                                                        <span class="icon">
                                                            <i class="fas fa-check"></i>
                                                        </span>
                                                        <span>Selesaikan Pemesanan</span>
                                                    </button> 
                                                    
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                    {{ $orders->links() }}

                    @endif

                </div>
            </div>
            <!-- End Order Table -->

        </div>
    </div>
</div>
@endsection


