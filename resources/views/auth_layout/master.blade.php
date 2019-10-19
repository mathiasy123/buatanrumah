<!DOCTYPE html>
<html lang="en" id="home">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Awesome For Icon -->
    <link rel="stylesheet" href="assets/fontawesome-free-5.10.2-web/css/all.css">

    <!-- Bulma CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">

    <!-- Google Font Style -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <!-- Own CSS -->
    <link rel="stylesheet" href="{{ asset('auth_css/auth-style.css') }}">

    <title>@yield('title')</title>
</head>

<body class="has-background-warning">

    @yield('content')

    <!-- Own Javascript -->
    <script src="{{ asset('auth_js/script.js') }}"></script>

</body>

</html>