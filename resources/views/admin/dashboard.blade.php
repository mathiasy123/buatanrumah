@extends('admin_layout.master')

@section('title', 'Admin CMS | Dashboard')

@section('admin_content')
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
                                Data Akun Pemasak
                            </div>
                        </div>
                        <div class="card-content">
                            <p class="is-size-3">Total: {{ $count_chef }}</p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card has-background-danger has-text-white">
                        <div class="card-header">
                            <div class="card-header-title has-text-white">
                                Data Akun Re-Seller
                            </div>
                        </div>
                        <div class="card-content">
                            <p class="is-size-3">Total: {{ $count_reseller }}</p>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card has-background-info has-text-white">
                        <div class="card-header">
                            <div class="card-header-title has-text-white">
                                Data Profile Pemasak
                            </div>
                        </div>
                        <div class="card-content">
                            <p class="is-size-3">Total: 1000</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Panel Dashboard Section  -->

            <!-- Title Chef Account Table -->
            <div class="columns is-variable is-desktop">
                <div class="column">
                    <div class="level">
                        <div class="level-left">
                            <h1 class="title">Data Akun Pemasak</h1>
                        </div>
                        <div class="level-right">
                            <a href="/admin/pemasak" class="button overview-detail is-link is-rounded">Lihat Lebih Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Title Chef Account Table -->

            <!-- Chef Account Table -->
            <div class="columns is-variable is-desktop">
                <div class="column">
                    <div class="table-container">
                        <table class="table table-data is-hoverable is-fullwidth">
                            <thead>
                                <th>#</th>
                                <th>Nama Pemasak</th>
                                <th>E-mail Pemasak</th>
                                <th>Nomor Telepon Pemasak</th>
                                <th>Alamat Pemasak</th>
                                <th>Instagram Pemasak</th>
                            </thead>
                            <tbody>
                                
                                @foreach($chefs as $chef)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ ucwords($chef->name) }}</td>
                                    <td>{{ $chef->email }}</td>
                                    <td>{{ ($chef->phone_call == '') ? '-----' :  $chef->phone_call }}</td>
                                    <td>{{ ($chef->address == '') ? '-----' : ucwords($chef->address) }}</td>
                                    <td>{{ ($chef->instagram == '') ? '-----' : $chef->instagram }}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End Chef Account Table -->

            <!-- Title Re-seller Account Table -->
            <div class="columns is-variable is-desktop">
                <div class="column">
                    <div class="level">
                        <div class="level-left">
                            <h1 class="title">Data Akun Re-Seller</h1>
                        </div>
                        <div class="level-right">
                            <a href="/admin/re-seller" class="button overview-detail is-link is-rounded">Lihat Lebih Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Title Re-seller Account Table -->

            <!-- Re-seller Account Table -->
            <div class="columns is-variable is-desktop">
                <div class="column">
                    <div class="table-container">
                        <table class="table table-data is-hoverable is-fullwidth">
                            <thead>
                                <th>#</th>
                                <th>Nama Re-Seller</th>
                                <th>E-mail Re-Seller</th>
                                <th>Nomor Telepon Re-Seller</th>
                                <th>Alamat Re-Seller</th>
                            </thead>
                            <tbody>

                                @foreach($resellers as $reseller)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ ucwords($reseller->name) }}</td>
                                    <td>{{ $reseller->email }}</td>
                                    <td>{{ ($reseller->phone_call == '') ? '-----' :  $reseller->phone_call }}</td>
                                    <td>{{ ($reseller->address == '') ? '-----' : ucwords($reseller->address) }}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End Re-seller Account Table -->

        </div>
    </div>
</div>
@endsection

