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
                <div class="col-6 col-lg-5 mt-n20 pb-8">
                    <div class="card">
                        <div class="card-body p-11 text-center">
                            <h2 class="mb-3 text-start"><i class="uil uil-user"></i> Login</h2>
                            <p class="lead mb-2 text-start">Non Pegawai Pemprov Bali</p>
                            <form class="text-start mb-3">
                                <div class="form-floating mb-4">
                                  <input type="text" name="username" class="form-control" placeholder="Username">
                                  <label>Username</label>
                                </div>
                                <div class="form-floating password-field mb-4">
                                  <input type="password" name="password" class="form-control" placeholder="Password">
                                  <span class="password-toggle"><i class="uil uil-eye"></i></span>
                                  <label>Password</label>
                                </div>
                                <a class="btn btn-info rounded-pill btn-login w-100 mb-2">Log In</a>
                                <a class="btn btn-soft-ash rounded-pill btn-login w-100 mb-2" href="{{ url('/login-option') }}"><i class="uil uil-arrow-left"></i> Kembali</a>
                            </form>
                            <div class="divider-icon my-4"><i class="uil uil-user"></i><span class="opacity-0">.</span></div>
                            <p class="mb-1"><a href="{{ url('/forgot-password') }}" class="hover text-info"><strong>Lupa Password?</strong></a></p>
                            <p class="mb-0">Belum memiliki akun? <a href="{{ url('sign-up') }}" class="hover text-success"><strong>Buat Akun</strong></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
