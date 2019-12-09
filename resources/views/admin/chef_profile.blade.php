@extends('admin_layout.master')

@section('title', 'Admin CMS | Kelola Konten Profil Pemasak')

@section('admin_content')
<div class="content">
    <div class="column is-10-desktop is-offset-2-desktop is-9-tablet is-offset-3-tablet is-12-mobile">
        <div class="p-1">
            
            <!-- Title Re-Seller Account Table -->
            <div class="columns is-variable is-desktop">
                <div class="column">
                    <h1 class="title">Data Konten Profil Pemasak</h1>
                    <a href="/admin/tambah/pemasak-profil" class="button is-success is-rounded is-fullwidth-mobile is-medium">Tambah Profil Pemasak</a>
                </div>
            </div>
            <!-- End Title Re-Seller Account Table -->

            <!-- Search Re-Seller Account Table -->
            <div class="columns is-variable is-desktop">
                <div class="column is-9-desktop is-12-mobile">
                    <form method="post" action="{{ url()->current() }}">
                        @csrf
                        <div class="control has-icons-right">
                            <input class="input is-medium @error('profile_keyword') is-danger @enderror" name="profile_keyword" type="text" placeholder="Cari Konten Profil Pemasak">
                            <span class="icon is-right">
                                <i class="fas fa-search"></i>
                            </span>

                            @error('profile_keyword')
                            <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </form>
                </div>
                <div class="column is-2-desktop is-12-mobile">
                    <a href="/admin/pemasak-profil" class="button reset-button is-danger is-rounded is-fullwidth-mobile is-medium">Reset Pencarian</a>
                </div>
            </div>
            <!-- End Search Re-Seller Account Table -->

            @if(session('profile_notif'))
            <div class="notification is-success">
                <button class="delete"></button>
                {{ @session('profile_notif') }}
            </div>
            @endif

            <!-- Re-Seller Account Table -->
            <div class="columns is-variable is-desktop">
                <div class="column">
                
                    @if(session('profile_not_found'))

                    <div class="content">
                        <h3 class="has-text-centered flash-message">-- {{ @session('profile_not_found') }} --</h3>
                    </div>

                    @else

                    <div class="table-container">
                        <table class="table table-data is-hoverable is-fullwidth">
                            <thead>
                                <th>#</th>
                                <th>Nama Pemilik Profil</th>
                                <th>Tangggal Dibuat</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                
                                @foreach($profiles as $index => $profile)
                                <tr>
                                    <td>{{ $index + $profiles->firstItem() }}</td>
                                    <td>{{ ucwords($profile->user->name) }}</td>
                                    <td>{{ $profile->created_at }}</td>

                                    <td>
                                        <a href="/admin/ubah/pemasak-profil/{{ $profile->id }}" class="button is-warning">
                                            <span class="icon">
                                                <i class="fas fa-pencil-alt"></i>
                                            </span>
                                            <span>Ubah</span>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                    {{ $profiles->links() }}

                    @endif

                </div>
            </div>
            <!-- End Re-Seller Account Table -->

        </div>
    </div>
</div>
@endsection


