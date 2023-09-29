@extends('landing/master')

@section('landing/content')
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-300"
        data-image-src="{{ asset('assets/landing/img/photos/bg3-red.jpg') }}">
        <div class="container pt-17 pt-md-18 text-center">
            <div class="row mb-11">
                <div class="col-12 mx-auto">
                    <h4 class="display-6 text-white mb-0">
                        Topik Ini Belum Tersedia
                    </h4>
                </div>
                <!-- /column -->
            </div>
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
        <div class="container pb-14 pb-md-16">
            <div class="row gx-lg-8 gx-xl-12">
                <div class="col-lg-9 order-lg-2">
                    <div class="blog classic-view">
                        <article class="post">
                            <div class="card">
                                <div class="card-body">
                                    <div class="post-header">
                                        <h2 class="post-title mt-1 mb-0">Topik Ini Belum Tersedia</h2>
                                        <hr class="my-4">
                                    </div>
                                    <div class="post-content">
                                        <p>Belum ada artikel di halaman ini.</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <aside class="col-lg-3 sidebar mt-8 mt-lg-6">
                    <div class="widget">
                        <form class="search-form">
                            <div class="form-floating mb-0">
                                <input id="search-form" type="text" class="form-control" placeholder="Search">
                                <label for="search-form">Pencarian</label>
                            </div>
                        </form>
                    </div>
                    <div class="widget">
                        <ul class="icon-list bullet-bg bullet-soft-green">
                            <li><span><i class="uil uil-arrow-right"></i></span><a class="hover text-dark"
                                    href="{{ url('/kms') }}"> Mulai</a></li>
                            <li><span><i class="uil uil-arrow-right"></i></span><a class="hover text-success"
                                    href="{{ url('/kms/ensiklopedia-kepegawaian-umum') }}"> Ensiklopedia Kepegawaian
                                    Umum</a></li>
                            <li><span><i class="uil uil-arrow-right"></i></span><a class="hover text-dark"
                                    href="{{ url('/login-option') }}"> Knowledge Instansi</a></li>
                            <li><span><i class="uil uil-arrow-right"></i></span><a class="hover text-dark"
                                    href="https://sso.baliprov.dev"> Knowledge Internal KBS Corpu Provinsi Bali</a></li>
                            <li><span><i class="uil uil-arrow-right"></i></span><a class="hover text-muted"
                                    href="{{ url('/login-option') }}"> E-learning & Quiz</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection
