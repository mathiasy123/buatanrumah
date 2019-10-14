@extends('chef_layout.master_dashboard')

@section('title', 'Jessica Doe | Pemesanan')

@section('chef_content')
<!-- Tabel Data Section -->
<section class="section tabel-order" id="tabel-order">
    <div class="container is-fluid">
        <div class="columns container is-fluid">
            <div class="column is-8">
                <h3 class="is-size-3 title-pemesanan">Data Pemesanan</h3>
                <form method="post" action="/order/search">
                    @csrf
                    <div class="control has-icons-right">
                        <input class="input @error('order_keyword') is-danger @enderror" name="order_keyword" type="text" placeholder="Cari Pemesanan Melalui Kode Pemesanan">
                        <span class="icon is-right">
                            <i class="fas fa-search"></i>
                        </span>

                        @error('order_keyword')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                        
                    </div>
                </form>
            </div>
        </div>
        <div class="columns container is-fluid">
            <div class="column is-12">
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
                            <td>{{ $order->order_code }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>
                                <a href="/order/detail/1" class="button is-info is-rounded">Lihat Detail</a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
                <nav class="pagination is-centered" role="navigation" aria-label="pagination">
                    <a class="pagination-previous">Previous</a>
                    <a class="pagination-next">Next page</a>
                    <ul class="pagination-list">
                        <li><a class="pagination-link is-current">1</a></li>
                        <li><a class="pagination-link">2</a></li>
                        <li><a class="pagination-link">3</a></li>
                        <li><a class="pagination-link">4</a></li>
                        <li><a class="pagination-link">5</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Tabel Data Section -->
@endsection