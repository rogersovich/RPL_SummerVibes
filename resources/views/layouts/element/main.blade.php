<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="{{ asset('assets/argon/js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/fullpage.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/argon/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/argon/css/argon.css?v=1.1.0') }}" rel="stylesheet" />
    <!--   Asset   -->
    <link rel="stylesheet" href="{{ asset('assets/argon/css/font-open-sans.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-summerVibes.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    {{-- <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/assets/img/logo_compact.png') }}"> --}}
    {{-- <link href="{{ asset('assets/argon/js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" /> --}}

    <style>
        .pb-6{
            padding-bottom: 5rem;
        }

        .pb-7{
            padding-bottom: 6rem;
        }

        .font-summmerVibes{
            font-family: 'Kaushan Script', cursive !important;
        }

        body{ margin:0; background-color: rgb(23, 189, 240); } 
    canvas{ display: block; vertical-align: bottom; } /* ---- particles.js container ---- */ 
    #particles-js{ position:absolute; width: 100%; height: 100%; background-color: rgb(23, 189, 240); background-image: url(""); background-repeat: no-repeat; background-size: cover; background-position: 50% 50%; } /* ---- stats.js ---- */ 
    .count-particles{ background: #000022; position: absolute; top: 48px; left: 0; width: 80px; color: #13E8E9; font-size: .8em; text-align: left; text-indent: 4px; line-height: 14px; padding-bottom: 2px; font-family: Helvetica, Arial, sans-serif; font-weight: bold; } 
    .js-count-particles{ font-size: 1.1em; } 
    #stats, .count-particles{ -webkit-user-select: none; margin-top: 5px; margin-left: 5px; } 
    #stats{ border-radius: 3px 3px 0 0; overflow: hidden; } 
    .count-particles{ border-radius: 0 0 3px 3px; }
    </style>

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
    <script src="{{ asset('assets/js/fullpage.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/particle.js') }}"></script>
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    {{-- <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> --}}
    {{-- <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> --}}

    <!--   Custom   -->
    @yield('scripts')

</body>
</html>

