<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Apflix</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-free/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.6.0-web/css/all.min.css') }}">
    <style>
        .btn-sign-in,
        .btn-sign-in:focus,
        .btn-sign-in:active {
            background-color: #ffc107 !important;
            color: black !important;
            border: none;
        }

        .btn-sign-in:hover,
        .btn-sign-in:focus:hover {
            background-color: #ffca2c !important;
            color: black !important;
        }
    </style>
</head>

<body>
    <div class="container-fluid bg-login">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-lg-4 col-md-6">
                <div class="text-center">
                    <img src="{{ asset('assets/img/logo_ansek.png') }}" class="anflix-title" alt="Ansek Logo">
                    <h3 class="codeflix-sign-in">@yield('page-title')</h3>
                </div>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif

                @yield('content')
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    @yield('scripts')
</body>

</html>