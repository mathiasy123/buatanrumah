@extends('auth_layout.master')

@section('title', 'Buatan Rumah | Sign-In')

@section('content')
<!-- login Section -->
<section class="section">
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-7">
                <div class="card">
                    <div class="card-content">
                        <div class="content">
                            <h1 class="header-login">Sign-Up</h1>
                            <form method="post" action="/signup">
                                @csrf
                                <div class="field">
                                    <label for="nama_user" class="label">Nama</label>
                                    <div class="control">
                                        <input class="input is-rounded @error('nama_user') is-danger @enderror" name="nama_user" value="{{ @old('nama_user') }}" type="text" placeholder="Nama Anda" id="nama_user">
                                    </div>
                                    @error('nama_user')
                                    <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="field">
                                    <label for="email" class="label">Email</label>
                                    <div class="control">
                                        <input class="input is-rounded @error('email') is-danger @enderror" name="email" value="{{ @old('email') }}" type="text" placeholder="Email Anda"
                                            id="email">
                                    </div>
                                    @error('email')
                                    <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="field">
                                    <label for="nomor_telepon" class="label">Nomor Telepon</label>
                                    <div class="control">
                                        <input class="input is-rounded @error('nomor_telepon') is-danger @enderror" type="number" name="nomor_telepon" value="{{ @old('nomor_telepon') }}" placeholder="Nomor Telepon Anda"
                                            id="nomor_telepon">
                                    </div>
                                    @error('nomor_telepon')
                                    <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="field">
                                    <label for="password" class="label">Password</label>
                                    <div class="control">
                                        <input class="input is-rounded @error('password') is-danger @enderror" name="password" type="password" placeholder="Password Anda"
                                            id="password">
                                    </div>
                                    @error('password')
                                    <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="field">
                                    <label for="password_confirmation" class="label">Konfirmasi Password</label>
                                    <div class="control">
                                        <input class="input is-rounded @error('password_confirmation') is-danger @enderror" name="password_confirmation" type="password" placeholder="Konfirmasi Password Anda"
                                            id="password_confirmation">
                                    </div>
                                    @error('password_confirmation')
                                    <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <p class="info-sign">Sudah memiliki akun? <a href="/login">Login</a> disini!</p>
                                <div class="button-center">
                                    <button type="submit" class="login-button button is-outlined is-warning is-rounded">
                                        <strong>Sign Up</strong>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Login Section -->
@endsection