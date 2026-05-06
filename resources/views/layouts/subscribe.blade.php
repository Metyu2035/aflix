<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - Apflix</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.6.0-web/css/all.min.css') }}">
    <style>
        body {
            background-color: #132029;
            color: white;
        }

        .card {
            background-color: #142936;
            border: 1px solid #ece808;
            border-radius: 15px;
        }

        .card-header {
            background-color: #ece808;
            border-bottom: 1px solid #ece808;
        }

        .text-green {
            color: #ece808;
        }

        .border-green {
            border-color: #ece808;
        }

        .btn-green {
            background-color: #ece808;
            border-color: #ece808;
            color: #1a1d21;
        }

        .btn-green:hover {
            background-color: #132029;
            border-color: #ece808;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <h2 class="mb-2 text-center">@yield('title')</h2>

        @yield('content')
    </div>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    @yield('scripts')
</body>

</html>