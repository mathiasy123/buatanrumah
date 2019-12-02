@extends('admin_layout.master')

@section('title', 'Admin CMS | Kelola Makanan Pemasak')

@section('admin_content')
<div class="content">
    <div class="column is-10-desktop is-offset-2-desktop is-9-tablet is-offset-3-tablet is-12-mobile">
        <div class="p-1">
            
            <!-- Title Chef Account Table -->
            <div class="columns is-variable is-desktop">
                <div class="column">
                    <h1 class="title">Data Makanan Pemasak</h1>
                    <a href="/admin/tambah/pemasak-makanan" class="button is-success is-rounded is-fullwidth-mobile is-medium">Tambah Makanan Pemasak</a>
                </div>
            </div>
            <!-- End Title Chef Account Table -->

            <!-- Search Chef Account Table -->
            <div class="columns is-variable is-desktop">
                <div class="column is-9-desktop is-12-mobile">
                    <form method="post" action="{{ url()->current() }}">
                        @csrf
                        <div class="control has-icons-right">
                            <input class="input is-medium @error('food_keyword') is-danger @enderror" name="food_keyword" type="text" placeholder="Cari Makanan Pemasak">
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
                    <a href="/admin/pemasak-makanan" class="button reset-button is-danger is-rounded is-fullwidth-mobile is-medium">Reset Pencarian</a>
                </div>
            </div>
            <!-- End Search Chef Account Table -->

            @if(session('food_notif'))
            <div class="notification is-success">
                <button class="delete"></button>
                {{ @session('food_notif') }}
            </div>
            @endif

            <!-- Chef Account Table -->
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
                                <th>Nama Pemilik Makanan</th>
                                <th>Nama Makanan</th>
                                <th>Foto Makanan</th>
                                <th>Rating Makanan</th>
                                <th>Deskripsi Makanan</th>
                                <th>Harga Makanan</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                
                                @foreach($chef_foods as $index => $chef_food)
                                <tr>
                                    <td>{{ $index + $chef_foods->firstItem() }}</td>
                                    <td>{{ ucwords($chef_food->user->name) }}</td>
                                    <td>{{ ucwords($chef_food->food_name) }}</td>
                                    <td>
                                        <img src="{{ asset('user_assets/images/food/' . $chef_food->user_id . '/' . $chef_food->image) }}" width="150" height="140" alt="Foto Makanan">
                                    </td>
                                    <td>{{ $chef_food->rating }}</td>
                                    <td>{{ $chef_food->description }}</td>
                                    <td>{{ $chef_food->price }}</td>
                                    <td>
                                        <div class="field is-grouped">
                                            <div class="control">
                                                <form action="/admin/hapus/pemasak-makanan/{{ $chef_food->user->id }}/{{ $chef_food->id }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    
                                                        <button type="submit" class="button is-danger">
                                                            <span class="icon">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </span>
                                                            <span>Hapus</span>
                                                        </button> 
                                                    
                                                </form>
                                            </div>
                                            
                                            <div class="control">
                                                <a href="/admin/ubah/pemasak-makanan/{{ $chef_food->id }}" class="button is-warning">
                                                    <span class="icon">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </span>
                                                    <span>Ubah</span>
                                                </a> 
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                    {{ $chef_foods->links() }}

                    @endif

                </div>
            </div>
            <!-- End Chef Account Table -->

        </div>
    </div>
</div>
@endsection


