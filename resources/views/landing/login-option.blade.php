@extends('landing/master')

@section('landing/content')
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-300" data-image-src="{{ asset('assets/landing/img/photos/bg3-red.jpg') }}">
        <div class="container pt-17 pb-19 pt-md-18 pb-md-17 text-center">
        </div>
        <!-- /.container -->
        <div class="overflow-hidden">
            <div class="divider text-light mx-n2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60">
                    <path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z" />
                </svg>
            </div>
        </div>
    </section>
    <!-- /section -->

    <section class="wrapper bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-lg-5 mt-n20 pb-19">
                    <div class="card">
                        <div class="card-body p-11 text-center">
                            <h2 class="mb-3 text-start"><i class="uil uil-user"></i> Login</h2>
                            @if (Session::has('warning'))
                                <div class="alert alert-warning text-center alert-dismissible" role="alert">
                                    <i class="uil uil-exclamation-triangle"></i> {!! session('warning') !!}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                </div>
                            @endif
                            <p class="lead mb-2 text-start">Pilih salah satu:</p>
                            <form class="text-start mb-3">
                                <a href="{{ url('/authenticateToSSO') }}"
                                    class="btn btn-danger rounded-pill btn-login w-100 mb-2">Pegawai Pemprov Bali</a>
                                <a href="{{ url('login-eksternal') }}" class="btn btn-info rounded-pill btn-login w-100 mb-2">Non Pegawai Pemprov Bali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <script>
        document.addEventListener("DOMContentLoaded", () => {
            // console.log("Hello World!");
            const href = "#nav-scroll";
            history.pushState("", document.title, window.location.pathname + window.location.search);
            const offsetWidth = document.querySelector(href).offsetWidth;
            scroll({
                top: offsetWidth,
                behavior: "smooth"
            });
        });
    </script> --}}
@endsection
