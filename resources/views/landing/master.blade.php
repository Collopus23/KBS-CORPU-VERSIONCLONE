<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>KBS Corporate University</title>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="shortcut icon" href="{{ asset('assets/landing/img/favicon.png') }}">
		<link rel="stylesheet" href="{{ asset('assets/landing/css/plugins.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/landing/css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/landing/css/colors/red.css') }}">
		<link rel="preload" href="{{ asset('assets/landing/css/fonts/urbanist.css') }}" as="style" onload="this.rel='stylesheet'">
    </head>

    <body>
        <div class="content-wrapper">
            <header class="wrapper bg-soft-primary">

                {{-- nav blade --}}
                @if($nav == "verse-1")
                    @include('landing/nav-verse-1')
                @else
                    @include('landing/nav-verse-2')
                @endif

            </header>
            <!-- /header -->

            {{-- content --}}
            @yield('landing/content')

        </div>
        <!-- /.content-wrapper -->

        @include('landing/footer')

        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        {{-- <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
        <script src="{{ asset('assets/landing/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/landing/js/theme.js') }}"></script>
    </body>

</html>