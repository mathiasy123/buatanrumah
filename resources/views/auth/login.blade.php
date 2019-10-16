@extends('auth_layout.master')

@section('title', 'Buatan Rumah | Log-In')

@section('content')
<!-- login Section -->
<section class="section">
    <div class="container">
        <div class="columns is-centered">
            <div class="column is-6">
                <div class="card">
                    <div class="card-content">
                        <div class="content">
                            <h1 class="header-login">Login</h1>
                            <div class="field">
                                <label for="email" class="label">Name</label>
                                <div class="control">
                                    <input class="input is-rounded" type="text" placeholder="example@gmail.com"
                                        id="email">
                                </div>
                            </div>
                            <div class="field">
                                <label for="password" class="label">Password</label>
                                <div class="control">
                                    <input class="input is-rounded" type="password" placeholder="********"
                                        id="password">
                                </div>
                            </div>
                            <p class="info-sign">Belum memiliki akun? <a href="/signup">Sign up</a> disini!</p>
                            <div class="button-center">
                                <a href="index.html" class="login-button button is-outlined is-warning is-rounded">
                                    <strong>Log In</strong>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Login Section -->
@endsection