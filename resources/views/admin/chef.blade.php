@extends('admin_layout.master')

@section('title', 'Admin CMS | Dashboard')

@section('admin_content')
<div class="content">
    <div class="column is-10-desktop is-offset-2-desktop is-9-tablet is-offset-3-tablet is-12-mobile">
        <div class="p-1">
            
            <!-- Title Chef Account Table -->
            <div class="columns is-variable is-desktop">
                <div class="column">
                    <h1 class="title">Data Akun Pemasak</h1>
                </div>
            </div>
            <!-- End Title Chef Account Table -->

            <!-- Search Chef Account Table -->
            <div class="columns is-variable is-desktop">
                <div class="column is-9-desktop is-12-mobile">
                    <form method="post" action="{{ url()->current() }}">
                        @csrf
                        <div class="control has-icons-right">
                            <input class="input is-medium @error('chef_keyword') is-danger @enderror" name="chef_keyword" type="text" placeholder="Cari Akun Pemasak">
                            <span class="icon is-right">
                                <i class="fas fa-search"></i>
                            </span>

                            @error('chef_keyword')
                            <p class="help is-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </form>
                </div>
                <div class="column is-2-desktop is-12-mobile">
                    <a href="/admin/pemasak" class="button reset-button is-danger is-rounded is-fullwidth-mobile is-medium">Reset Pencarian</a>
                </div>
            </div>
            <!-- End Search Chef Account Table -->

            <!-- Chef Account Table -->
            <div class="columns is-variable is-desktop">
                <div class="column">
                    @if(session('order_not_found'))

                    <div class="content">
                        <h3 class="has-text-centered flash-message">-- {{ @session('chef_not_found') }} --</h3>
                    </div>

                    @else

                    <div class="table-container">
                        <table class="table table-data is-hoverable is-fullwidth">
                            <thead>
                                <th>#</th>
                                <th>Nama Pemasak</th>
                                <th>Foto Pemasak</th>
                                <th>E-mail Pemasak</th>
                                <th>Nomor Telepon Pemasak</th>
                                <th>Alamat Pemasak</th>
                                <th>Instagram Pemasak</th>
                            </thead>
                            <tbody>
                                
                                @foreach($chefs as $index => $chef)
                                <tr>
                                    <td>{{ $index + $chefs->firstItem() }}</td>
                                    <td>{{ ucwords($chef->name) }}</td>

                                    @if($chef->user_image == '')

                                    <td>-----</td>

                                    @else

                                    <td>
                                        <img src="{{ asset('chef_images/frontend/' . $chef->user_image) }}" width="150" height="140" alt="Foto Pemasak">
                                    </td>

                                    @endif

                                    <td>{{ $chef->email }}</td>
                                    <td>{{ ($chef->phone_call == '') ? '-----' :  $chef->phone_call }}</td>
                                    <td>{{ ($chef->address == '') ? '-----' : ucwords($chef->address) }}</td>
                                    <td>{{ ($chef->instagram == '') ? '-----' : $chef->instagram }}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                    {{ $chefs->links() }}

                    @endif

                </div>
            </div>
            <!-- End Chef Account Table -->

        </div>
    </div>
</div>
@endsection


