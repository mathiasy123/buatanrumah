@extends('chef_layout.master_dashboard')

@section('title', 'Jessica Doe | Pemesanan')

@section('chef_content')
<!-- Tabel Data Section -->
<section class="section tabel-order" id="tabel-order">
    <div class="container is-fluid">
        <div class="columns container is-fluid">
            <div class="column is-12">
                <h3 class="is-size-3 title-pemesanan">Data Pemesanan</h3>
            </div>
        </div>
        <div class="columns container is-fluid">
            <div class="column is-9">
                <form method="post" action="{{ url()->current() }}">
                    @csrf
                    <div class="control has-icons-right">
                        <input class="input is-medium @error('order_keyword') is-danger @enderror" name="order_keyword" type="text" placeholder="Cari Masakan">
                        <span class="icon is-right">
                            <i class="fas fa-search"></i>
                        </span>

                        @error('order_keyword')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    
                </form>
                
            </div>
            <div class="column is-2">
                <a href="/order" class="button reset-button is-danger is-rounded is-medium">Reset Pencarian</a>
            </div>
        </div>
        <div class="columns container is-fluid">
            <div class="column is-12">
                @if(session('order_not_found'))

                    <div class="content">
                        <h3 class="has-text-centered flash-message">-- {{ @session('order_not_found') }} --</h3>
                    </div>

                @else

                <table class="table is-hoverable is-fullwidth">
                    <thead>
                        <th>#</th>
                        <th>Kode Pemesanan</th>
                        <th>Tanggal Pemesanan</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        
                        @foreach($orders as $order)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ strtoupper($order->order_code) }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>
                                <a href="/order/detail/{{ $order->order_id }}" class="button is-info is-rounded">Lihat Detail</a>
                            </td>
                        </tr>
                        @endforeach 

                    </tbody>
                </table>
                
                {{ $orders->links() }}

                @endif

            </div>
        </div>
    </div>
</section>
<!-- End Tabel Data Section -->
@endsection