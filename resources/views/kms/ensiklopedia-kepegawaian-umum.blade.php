@extends('landing/master')

@section('landing/content')
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-300"
        data-image-src="{{ asset('assets/landing/img/photos/bg3-red.jpg') }}">
        <div class="container pt-17 pt-md-18 text-center">
            <div class="row mb-11">
                <div class="col-12 mx-auto" data-cues="zoomIn" data-group="page-title" data-interval="-200" data-disabled="true">
                    <h4 class="display-6 text-white mb-0" data-cue="zoomIn" data-interval="-200" data-group="page-title"
                        data-show="true"
                        style="animation-name: zoomIn; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 500ms; animation-direction: normal; animation-fill-mode: both;">
                        <i class="uil uil-book-open"></i> Selamat Datang di KMS KBS Corporate University Provinsi Bali
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
                                    <div class="post-content">
                                        <h2 class="post-title mt-0">Ensiklopedia</h2>
                                        <p>Selamat datang di Ensiklopedia KMS KBS Corpu Provinsi Bali. Ensiklopedia ini menyajikan segala informasi penting terkait Aparatur Sipil Negara, Peraturan Kepegawaian, Nomenklatur dan Definisinya dalam bentuk Ensiklopedia.</p>
                                        <hr class="my-5" />

                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5 class="mb-0">Topik Hot</h5>
                                                <ul class="icon-list bullet-blue">
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="{{ url('/kms/sistem-kerja-pada-instansi-pemerintah-untuk-penyederhanaan-birokrasi') }}">Sistem Kerja pada Instansi Pemerintah untuk Penyederhanaan Birokrasi</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="{{ url('/kms/manajemen-talenta') }}">Manajemen Talenta</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="{{ url('/kms/berakhlak') }}">BerAKHLAK</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="">KORPRI</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="">Indeks NSPK</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="">Penugasan ASN pada Instansi Pemerintah dan di Luar Instansi Pemerintah</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="">Jabatan Fungsional</a></li>
                                                </ul>

                                                <h5 class="mt-4 mb-0">Nomenklatur Penting</h5>
                                                <ul class="icon-list bullet-blue">
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="{{ url('/kms/aparatur-sipil-negara') }}">Aparatur Sipil Negara</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="{{ url('/kms/pegawai-negeri-sipil') }}">Pegawai Negeri Sipil</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="{{ url('/kms/pegawai-pemerintah-dengan-perjanjian-kerja') }}">Pegawai Pemerintah dengan Perjanjian Kerja</a></li>
                                                </ul>

                                                <h5 class="mt-4 mb-0">Kelembagaan</h5>
                                                <ul class="icon-list bullet-blue">
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="{{ url('/kms/presiden') }}">Presiden</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="{{ url('/kms/kementerian-pan-dan-rb') }}">Kementerian PAN dan RB</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="">Komisi Aparatur Sipil Negara</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="">Lembaga Administrasi Negara</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="">Badan Kepegawaian Negara</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-md-6">
                                                <h5 class="mb-0">Peraturan Utama Aparatur Sipil Negara</h5>
                                                <ul class="icon-list bullet-blue">
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="{{ url('/kms/uu-no-5-tahun-2014') }}">UU Nomor 5 Tahun 2014 tentang ASN</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="">PP Nomor 11 Tahun 2017 tentang Manajemen PNS</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="">PP Nomor 49 Tahun 2018 tentang Manajemen PPPK</a></li>
                                                </ul>

                                                <h5 class="mt-4 mb-0">Manajemen PNS</h5>
                                                <ul class="icon-list bullet-blue">
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="{{ url('/kms/penyusunan-dan-penetapan-kebutuhan-pns') }}">Penyusunan dan Penetapan Kebutuhan PNS</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="">Pengadaan PNS</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="">Pengadaan PPPK</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="">Pangkat PNS</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="">Jabatan PNS</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="">Pengembangan Karier PNS</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="">Pola Karier PNS</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="">Promosi dan Mutasi PNS</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="">Penilaian Kinerja PNS</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="">Penggajian, Tunjangan dan Fasilitas PNS</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="">Penghargaan PNS</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="">Disiplin PNS</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="">Pemberhentian PNS</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="">Jaminan Pensiun dan Jaminan Hari Tua PNS</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="">Pensiun PNS</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="">Perlindungan PNS dan PPPK</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="">Pengangkatan PNS</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="">Cuti PNS</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="">Kode Etik</a></li>
                                                </ul>

                                                <h5 class="mt-4 mb-0">Manajemen PPPK</h5>
                                                <ul class="icon-list bullet-blue">
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="">Penyusunan dan Penetapan Kebutuhan PPPK</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="">Pengadaan PPPK</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="">Penilaian Kinerja PPPK</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="">Penggajian dan Tunjangan PPPK</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="">Pengembangan Kompetensi PPPK</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="">Penghargaan PPPK</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="">Disiplin PPPK</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="">Pemutusan Hubungan Perjanjian Kerja PPPK</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="">Pengangkatan PPPK</a></li>
                                                    <li class="mt-0 mb-0"><span><i class="uil uil-arrow-right"></i></span><a class="hover text-info" href="">Cuti PPPK</a></li>
                                                </ul>
                                            </div>
                                        </div>
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
                            <li><span><i class="uil uil-arrow-right"></i></span><a class="hover text-dark" href="{{ url('/kms') }}"> Mulai</a></li>
                            <li><span><i class="uil uil-arrow-right"></i></span><a class="hover text-success" href="{{ url('/kms/ensiklopedia-kepegawaian-umum') }}"> Ensiklopedia Kepegawaian Umum</a></li>
                            <li><span><i class="uil uil-arrow-right"></i></span><a class="hover text-dark" href="{{ url('/login-option') }}"> Knowledge Instansi</a></li>
                            <li><span><i class="uil uil-arrow-right"></i></span><a class="hover text-dark" href="https://sso.baliprov.dev"> Knowledge Internal KBS Corpu Provinsi Bali</a></li>
                            <li><span><i class="uil uil-arrow-right"></i></span><a class="hover text-muted" href="{{ url('/login-option') }}"> E-learning & Quiz</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>
@endsection
