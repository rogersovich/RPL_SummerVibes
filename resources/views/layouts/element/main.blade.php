<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="{{ asset('assets/argon/js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet" />
    {{-- <link href="{{ asset('assets/argon/js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" /> --}}
    <link href="{{ asset('assets/argon/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/argon/css/argon.css?v=1.1.0') }}" rel="stylesheet" />
    <!--   Asset   -->
    <link rel="stylesheet" href="{{ asset('assets/argon/css/font-open-sans.css') }}">
    {{-- <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/assets/img/logo_compact.png') }}"> --}}

    @yield('custom-css')

    <title>@yield('title')</title>

</head>
<body>

    <div class="main-content">
        @section('content')

        @show
    </div>

    {{-- all jquery --}}
    <!--   Core   -->
    {{-- <script src="{{ asset('assets/argon/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script> --}}
    <!--   Argon JS   -->
    <script src="{{ asset('/assets/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/argon/vendor/popper/popper.min.js') }}"></script>
    <script src="{{ asset('assets/argon/vendor/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/argon/vendor/headroom/headroom.min.js') }}"></script>
    <script src="{{ asset('assets/argon/js/argon.js?v=1.1.0') }}"></script>
    {{-- <script src="{{ asset('assets/argon/js/argon-dashboard.min.js') }}"></script> --}}
    <!--   Custom   -->
    @yield('scripts')

</body>
</html>

