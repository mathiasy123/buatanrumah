@extends('admin_layout.master')

@section('title', 'Admin CMS | Dashboard')

@section('admin_content')
<!-- Panel Section -->
<section class="setion panel-admin" id="panel-admin">
    <div class="container is-fluid">
        <div class="columns">
            <div class="column">
                <div class="box has-background-success">
                    <div class="columns is-gapless is-mobile">
                        <div class="column">
                            <i class="fas fa-users fa-4x has-text-light"></i>
                        </div>
                        <div class="column has-text-light">
                            <h3 class="is-size-5"><b>Pemasak</b></h3>
                            <p class="is-size-5">Total : 1</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="box has-background-success">
                    <div class="columns is-gapless is-mobile">
                        <div class="column">
                            <i class="fas fa-user-tie fa-4x has-text-light"></i>
                        </div>
                        <div class="column has-text-light">
                            <h3 class="is-size-5"><b>Reseller</b></h3>
                            <p class="is-size-5">Total : 1</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="box has-background-success">
                    <div class="columns is-gapless is-mobile">
                        <div class="column">
                            <i class="fas fa-id-card fa-4x has-text-light"></i>
                        </div>
                        <div class="column has-text-light">
                            <h3 class="is-size-5"><b>Profile</b></h3>
                            <p class="is-size-5">Total : 1</p>
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

            <div class="column is-12">
                <h5 class="is-size-5 is-pulled-left">Data Akun Pemasak</h5>
                <a href="" class="button overview-detail is-link is-rounded is-pulled-right">Lihat Lebih Detail</a>
                <table class="table table-space is-hoverable is-fullwidth">
                    <thead>
                        <th>#</th>
                        <th>Email Pemasak</th>
                        <th>Nama Pemasak</th>
                        <th>Nomor Telepon Pemasak</th>
                        <th>Alamat Pemasak</th>
                    </thead>
                    <tbody>
 
                        <tr>
                            <td>1</td>
                            <td>andi@gmail.com</td>
                            <td>Andi</td>
                            <td>089825234</td>
                            <td>Jln Bekasi Timur</td>
                        </tr>
                       
                    </tbody>
                </table>
            </div>

    </div>
</section>
<!-- End Tabel Data Section -->

<!-- Tabel Data Section -->
<section class="section tabel-data" id="tabel-data">
    <div class="container is-fluid">
            <div class="column is-12">
                <h5 class="is-size-5 is-pulled-left">Data Akun Reseller</h5>
                <a href="" class="button overview-detail is-link is-rounded is-pulled-right">Lihat Lebih Detail</a>
                <table class="table table-space is-hoverable is-fullwidth">
                    <thead>
                        <th>#</th>
                        <th>Email Reseller</th>
                        <th>Nama Reseller</th>
                        <th>Nomor Telepon Reseller</th>
                        <th>Alamat Reseller</th>
                    </thead>
                    <tbody>
 
                        <tr>
                            <td>1</td>
                            <td>andi@gmail.com</td>
                            <td>Andi</td>
                            <td>089825234</td>
                            <td>Jln Bekasi Timur</td>
                        </tr>
                       
                    </tbody>
                </table>
            </div>
    </div>
</section>
<!-- End Tabel Data Section -->

<!-- Tabel Data Section -->
<section class="section tabel-data" id="tabel-data">
    <div class="container is-fluid">
            <div class="column is-12">
                <h5 class="is-size-5 is-pulled-left">Data Konten Profile</h5>
                <a href="" class="button overview-detail is-link is-rounded is-pulled-right">Lihat Lebih Detail</a>
                <table class="table table-space is-hoverable is-fullwidth">
                    <thead>
                        <th>#</th>
                        <th>Gambar Banner</th>
                        <th>Judul Banner</th>
                        <th>Foto Pemasak</th>
                    </thead>
                    <tbody>
 
                        <tr>
                            <td>1</td>
                            <td>andi@gmail.com</td>
                            <td>Andi</td>
                            <td>Andi</td>
                        </tr>
                       
                    </tbody>
                </table>
            </div>

    </div>
</section>
<!-- End Tabel Data Section -->
@endsection