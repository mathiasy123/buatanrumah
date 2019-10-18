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

                            @if(session('registered'))
                            <div class="notification is-success">
                                <button class="delete"></button>
                                {{ session('registered') }}
                            </div>
                            @endif
                            
                            <form method="post" action="/login">
                                @csrf
                                <div class="field">
                                    <label for="email" class="label">Email</label>
                                    <div class="control">
                                        <input class="input is-rounded @error('email') is-danger @enderror" name="email" type="text" placeholder="example@gmail.com"
                                            id="email">
                                    </div>
                                    @error('email')
                                    <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="field">
                                    <label for="password" class="label">Password</label>
                                    <div class="control">
                                        <input class="input is-rounded @error('password') is-danger @enderror" name="password" type="password" placeholder="********"
                                            id="password">
                                    </div>
                                    @error('password')
                                    <p class="help is-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <p class="info-sign">Belum memiliki akun? <a href="/signup">Sign up</a> disini!</p>
                                <div class="button-center">
                                    <button type="submit" class="login-button button is-outlined is-warning is-rounded">
                                        <strong>Log In</strong>
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