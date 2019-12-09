@extends('chef_layout.master')

@section('title', 'Pemasak | Lihat Makanan')

@section('chef_content')
<div class="content">
    <div class="column is-10-desktop is-offset-2-desktop is-9-tablet is-offset-3-tablet is-12-mobile">
        <div class="p-1">
            
            <!-- Title Food Table -->
            <div class="columns is-variable is-desktop">
                <div class="column">
                    <h1 class="title">Data Makanan</h1>
                </div>
            </div>
            <!-- End Title Food Table -->

            <!-- Search Food Table -->
            <div class="columns is-variable is-desktop">
                <div class="column is-9-desktop is-12-mobile">
                    <form method="post" action="{{ url()->current() }}">
                        @csrf
                        <div class="control has-icons-right">
                            <input class="input is-medium @error('food_keyword') is-danger @enderror" name="food_keyword" type="text" placeholder="Cari Makanan Anda">
                            <span class="icon is-right">
                                <i class="fas fa-search"></i>
                            </span>

                            @error('food_keyword')
                            <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </form>
                </div>
                <div class="column is-2-desktop is-12-mobile">
                    <a href="/pemasak/makanan" class="button reset-button is-danger is-rounded is-fullwidth-mobile is-medium">Reset Pencarian</a>
                </div>
            </div>
            <!-- End Search Food Table -->

            @if(session('food_notif'))
            <div class="notification is-success">
                <button class="delete"></button>
                {{ @session('food_notif') }}
            </div>
            @endif

            <!-- Food Table -->
            <div class="columns is-variable is-desktop">
                <div class="column">

                    @if(session('food_not_found'))

                    <div class="content">
                        <h3 class="has-text-centered flash-message">-- {{ @session('food_not_found') }} --</h3>
                    </div>

                    @else

                    <div class="table-container">
                        <table class="table table-data is-hoverable is-fullwidth">
                            <thead>
                                <th>#</th>
                                <th>Nama Makanan</th>
                                <th>Foto Makanan</th>
                                <th>Rating Makanan</th>
                                <th>Deskripsi Makanan</th>
                                <th>Harga Makanan</th>
                            </thead>
                            <tbody>
                                
                                @foreach($foods as $index => $food)
                                <tr>
                                    <td>{{ $index + $foods->firstItem() }}</td>
                                    <td>{{ ucwords($food->food_name) }}</td>
                                    <td>
                                        <img src="{{ asset('user_assets/images/food/' . $food->user_id . '/' . $food->image) }}" width="150" height="140" alt="Foto Makanan">
                                    </td>
                                    <td>{{ $food->rating }}</td>
                                    <td>{{ $food->description }}</td>
                                    <td>Rp. {{ number_format($food->price) }}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                    {{ $foods->links() }}

                    @endif

                </div>
            </div>
            <!-- End Food Table -->

        </div>
    </div>
</div>
@endsection


