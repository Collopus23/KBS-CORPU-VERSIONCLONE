@extends('landing/master')

@section('landing/content')
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-300" data-image-src="{{ asset('assets/landing/img/photos/bg3-red.jpg') }}" id="nav-beranda">
        <div class="container pt-17 pb-19 pt-md-18 pb-md-17 text-center">
            <div class="row mb-11">
                <div class="col-md-9 col-lg-7 col-xxl-6 mx-auto" data-cues="zoomIn" data-group="page-title"
                    data-interval="-200" data-disabled="true">
                    <h2 class="h6 text-uppercase ls-xl text-white mb-5" data-cue="zoomIn" data-interval="-200"
                        data-group="page-title" data-show="true"
                        style="animation-name: zoomIn; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                        KBS CORPU</h2>
                    <h3 class="display-1 text-white mb-7" data-cue="zoomIn" data-interval="-200"
                        data-group="page-title" data-show="true"
                        style="animation-name: zoomIn; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 500ms; animation-direction: normal; animation-fill-mode: both;">
                        Kerti Bali Sejahtera Corporate University</h3>
                    <a href="https://www.youtube.com/watch?v=aE7oHQ8ZpfQ" class="btn btn-circle btn-white btn-play ripple mx-auto mb-5"
                        data-glightbox="" data-cue="zoomIn" data-interval="-200" data-group="page-title"
                        data-show="true"
                        style="animation-name: zoomIn; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 1000ms; animation-direction: normal; animation-fill-mode: both;"><i
                            class="icn-caret-right"></i></a>
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

    <section class="wrapper bg-light angled upper-end lower-end">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-n20">
                    <div class="swiper-container dots-over" data-margin="5" data-dots="true" data-nav="true"
                        data-autoheight="true">
                        <div class="swiper rounded">
                            <div class="swiper-wrapper rounded">
                                <div class="swiper-slide rounded">
                                    <img src="{{ asset('assets/landing/img/slider/1.jpg') }}" class="rounded" alt="" />
                                    <div class="caption-wrapper p-12 justify-content-center">
                                        <div
                                            class="caption bg-white rounded px-4 py-3 mt-auto animate__animated animate__slideInDown animate__delay-1s">
                                            <h5 class="mb-0">Kerti Bali Sejahtera Corporate University</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide rounded">
                                    <img src="{{ asset('assets/landing/img/slider/2.jpg') }}" class="rounded" alt="" />
                                    <div class="caption-wrapper p-12">
                                        <div
                                            class="caption bg-white rounded px-4 py-3 mt-auto animate__animated animate__slideInDown animate__delay-1s">
                                            <h5 class="mb-0">Kerti Bali Sejahtera Corporate University</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide rounded">
                                    <img src="{{ asset('assets/landing/img/slider/3.jpg') }}" class="rounded" alt="" />
                                    <div class="caption-wrapper p-12 justify-content-end">
                                        <div
                                            class="caption bg-white rounded px-4 py-3 mt-auto animate__animated animate__slideInDown animate__delay-1s">
                                            <h5 class="mb-0">Kerti Bali Sejahtera Corporate University</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container" id="nav-tentang">
            <div class="row pt-13 gx-lg-8 gy-8 mt-10 mt-md-12 mt-lg-10 mb-15 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="row gx-md-5 gy-5" data-cues="fadeIn" data-group="images" data-disabled="true">
                        <div class="col-md-4 offset-md-2 align-self-end" data-cue="fadeIn" data-group="images">
                            <figure class="rounded"><img src="{{ asset('assets/landing/img/photos/g1.jpg') }}"
                                    srcset="{{ asset('assets/landing/img/photos/g1@2x.jpg') }} 2x" alt=""></figure>
                        </div>
                        <div class="col-md-6 align-self-end" data-cue="fadeIn" data-group="images">
                            <figure class="rounded"><img src="{{ asset('assets/landing/img/photos/g2.jpg') }}"
                                    srcset="{{ asset('assets/landing/img/photos/g2@2x.jpg') }} 2x" alt=""></figure>
                        </div>
                        <div class="col-md-6 offset-md-1" data-cue="fadeIn" data-group="images">
                            <figure class="rounded"><img src="{{ asset('assets/landing/img/photos/g3.jpg') }}"
                                    srcset="{{ asset('assets/landing/img/photos/g3@2x.jpg') }} 2x" alt=""></figure>
                        </div>
                        <div class="col-md-4 align-self-start" data-cue="fadeIn" data-group="images">
                            <figure class="rounded"><img src="{{ asset('assets/landing/img/photos/g4.jpg') }}"
                                    srcset="{{ asset('assets/landing/img/photos/g4@2x.jpg') }} 2x" alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="display-4 mb-3">TENTANG CORPORATE UNIVERSITY</h2>
                    <p class="lead fs-lg mb-8 pe-xxl-2">Entitas kegiatan pengembangan kompetensi ASN yang berperan
                        sebagai sarana strategis untuk membantu induk organisasi dalam mencapai tujuan organisasi
                        dalam bentuk penanganan isu-isu strategis melalui proses pembelajaran tematik dan
                        terintegrasi dengan melibatkan K/L/D terkait dan tenaga ahli dari dalam /luar instansi
                        pemerintah.</p>
                    <div class="row gx-xl-10 gy-6" data-cues="slideInUp" data-group="services"
                        data-disabled="true">
                        <div class="col-md-6 col-lg-12 col-xl-6" data-cue="slideInUp" data-group="services">
                            <div class="d-flex flex-row">
                                <div>
                                    <div class="icon btn btn-circle btn-lg btn-soft-primary disabled me-5"> <i
                                            class="uil uil-phone-volume"></i> </div>
                                </div>
                                <div>
                                    <h4 class="mb-1">Terintegrasi</h4>
                                    <p class="mb-0">Sistem pengembangan kompetensi sumber daya manusia
                                        terintegrasi</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12 col-xl-6" data-cue="slideInUp" data-group="services">
                            <div class="d-flex flex-row">
                                <div>
                                    <div class="icon btn btn-circle btn-lg btn-soft-primary disabled me-5"> <i
                                            class="uil uil-shield-exclamation"></i> </div>
                                </div>
                                <div>
                                    <h4 class="mb-1">Strategis dan potensial</h4>
                                    <p class="mb-0">Aliansi dengan mitra strategis dan potensial</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12 col-xl-6" data-cue="slideInUp" data-group="services">
                            <div class="d-flex flex-row">
                                <div>
                                    <div class="icon btn btn-circle btn-lg btn-soft-primary disabled me-5"> <i
                                            class="uil uil-laptop-cloud"></i> </div>
                                </div>
                                <div>
                                    <h4 class="mb-1">Aplikatif</h4>
                                    <p class="mb-0">Solusi pengembangan kompetensi yang aplikatif</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12 col-xl-6" data-cue="slideInUp" data-group="services">
                            <div class="d-flex flex-row">
                                <div>
                                    <div class="icon btn btn-circle btn-lg btn-soft-primary disabled me-5"> <i
                                            class="uil uil-chart-line"></i> </div>
                                </div>
                                <div>
                                    <h4 class="mb-1">Handal</h4>
                                    <p class="mb-0">Mengoptimalkan pusat asesmen yang handal dalam mendukung
                                        proses pengembangan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wrapper bg-gradient-reverse-primary">
        <div class="container py-8 py-md-8">
            <div class="row gx-lg-8 gx-xl-12 gy-10 mb-8 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <h3 class="display-4 mb-5">KBS CORPORATE UNIVERSITY</h3>
                    <p class="mb-7">KBS Corpu merupakan sistem dan strategi penyelenggaraan pengembangan
                        kompetensi ASN Pemerintah Provinsi yang terintegrasi yang mengedepankan penggunaan teknologi
                        informasi dalam proses pembelajaran untuk meningkatkan fleksibilitas dan aksesibilitas dalam
                        rangka mengembangkan pengetahuan dan keterampilan serta mengubah sikap perilaku sesuai
                        dengan nilai-nilai kearifan lokal melalui pembelajaran tematik dan terintegrasi dengan
                        melibatkan Instansi Pemerintah terkait dan tenaga ahli dari dalam/luar instansi.</p>
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <figure><img class="w-auto" src="{{ asset('assets/landing/img/illustrations/3d4.png') }}"
                            srcset="{{ asset('assets/landing/img/illustrations/3d4@2x.png') }} 2x" alt=""></figure>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>

    <section class="wrapper bg-light" id="nav-framework">
        <div class="container pt-14 pt-md-16">
            <div class="row text-center">
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    {{-- <h3 class="display-4 mb-10 px-xl-10">FRAMEWORK / FAKULTAS</h3> --}}
                    <h3 class="display-4 mb-10 px-xl-10">FRAMEWORK</h3>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="position-relative">
                <div class="shape rounded-circle bg-soft-blue rellax w-16 h-16" data-rellax-speed="1"
                    style="bottom: -0.5rem; right: -2.2rem; z-index: 0; transform: translate3d(0px, 155px, 0px);">
                </div>
                <div class="shape bg-dot primary rellax w-16 h-17" data-rellax-speed="1"
                    style="top: -0.5rem; left: -2.5rem; z-index: 0; transform: translate3d(0px, 93px, 0px);"></div>
                <div class="row gx-md-5 gy-5 text-center justify-content-center">
                    {{-- <div class="col-md-6 col-xl-3">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 511.9"
                                    data-inject-url="{{ asset('assets/landing/img/icons/lineal/search-2.svg') }}"
                                    class="svg-inject icon-svg icon-svg-md text-yellow mb-3">
                                    <path class="lineal-stroke"
                                        d="M297.3 429.9c-118.7 0-215-96.2-215-215 0-80.1 44.5-153.5 115.5-190.6 105.1-54.7 235.1-13.8 289.9 91.3 4 8 .8 17.7-7.1 21.7-7.8 3.9-17.3.9-21.5-6.8C412.5 41.2 302 6.4 212.7 52.9c-89.4 46.7-124 156.9-77.4 246.3s156.9 124 246.3 77.4c61.7-32.2 99.8-96.8 98-166.4-.2-8.9 6.9-16.3 15.8-16.4 8.9-.2 16.2 6.8 16.4 15.7 2.9 118.8-91.1 217.5-209.9 220.4-1.4-.1-3 0-4.6 0z">
                                    </path>
                                    <circle class="lineal-fill" cx="297.1" cy="214.9" r="111.1">
                                    </circle>
                                    <path class="lineal-stroke"
                                        d="M297.1 342.1c-70.3 0-127.2-57-127.2-127.2s57-127.2 127.2-127.2 127.2 57 127.2 127.2c-.1 70.2-57 127.1-127.2 127.2zm0-222.2c-52.5 0-95 42.5-95 95s42.5 95 95 95 95-42.5 95-95c-.1-52.5-42.6-95-95-95zm-240.6 392C25.3 511.9 0 486.6 0 455.4c0-17.6 8.2-34.2 22.2-44.9L88.3 360c6.4-4.9 15.5-4.3 21.2 1.4l41.1 41.1c5.7 5.7 6.3 14.8 1.4 21.2l-50.5 66.1c-9.9 12.9-24.9 21-41.2 22.1h-3.8zm40.1-117.7l-54.9 41.9c-10.7 8.1-12.9 23.3-4.8 34s23.3 12.9 34 4.8c1.8-1.4 3.4-3 4.8-4.8l42-54.9-21.1-21z">
                                    </path>
                                </svg>
                                <h4>FAKULTAS I</h4>
                                <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi
                                    porta gravida at eget metus cras justo.</p>
                                <a href="#" class="more hover link-yellow">Learn More</a>
                            </div>
                            <!--/.card-body -->
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 442.8"
                                    data-inject-url="{{ asset('assets/landing/img/icons/lineal/browser.svg') }}"
                                    class="svg-inject icon-svg icon-svg-md text-red mb-3">
                                    <path class="lineal-stroke"
                                        d="M464.2 442.8H47.7C21.4 442.8 0 421.4 0 395.1V47.7C0 21.4 21.4 0 47.7 0h416.5C490.6 0 512 21.4 512 47.7c0 7.6-6.2 13.8-13.8 13.9-7.6 0-13.8-6.2-13.9-13.8 0-11.1-9-20-20.1-20.1H47.7c-11.1 0-20 9-20.1 20.1v347.3c0 11.1 9 20.1 20.1 20.1h416.5c11.1 0 20.1-9 20.1-20.1V209.4c0-7.6 6.2-13.8 13.8-13.9 7.6 0 13.8 6.2 13.9 13.8V395c0 26.4-21.4 47.8-47.8 47.8z">
                                    </path>
                                    <path class="lineal-fill"
                                        d="M13.8 47.7v69.9h484.3V47.7c0-18.7-15.2-33.9-33.9-33.9H47.7C29 13.8 13.8 29 13.8 47.7z">
                                    </path>
                                    <path class="lineal-stroke"
                                        d="M498.2 131.5H13.8c-7.6 0-13.8-6.2-13.8-13.8v-70C0 21.4 21.4 0 47.7 0h416.5C490.6 0 512 21.4 512 47.7v69.9c0 7.7-6.2 13.9-13.8 13.9zM27.7 103.8h456.6v-56c0-11.1-9-20.1-20.1-20.1H47.8c-11.1 0-20 9-20.1 20v56.1z">
                                    </path>
                                    <path class="lineal-stroke"
                                        d="M294.7 79.6h-26.3c-7.6 0-13.8-6.2-13.8-13.8S260.8 52 268.4 52h26.3c7.6 0 13.8 6.2 13.8 13.8.1 7.6-6.1 13.8-13.8 13.8zm73.4 0h-26.3c-7.6 0-13.8-6.2-13.8-13.8 0-7.6 6.2-13.8 13.8-13.8h26.3c7.6 0 13.8 6.2 13.8 13.8 0 7.6-6.2 13.8-13.8 13.8zm73.3 0h-26.3c-7.6 0-13.8-6.2-13.8-13.8 0-7.6 6.2-13.8 13.8-13.8h26.3c7.6 0 13.8 6.2 13.8 13.8.1 7.6-6.1 13.8-13.8 13.8z">
                                    </path>
                                    <path class="lineal-fill" d="M112.8 268.5h286.4v63.6H112.8z"></path>
                                    <path class="lineal-stroke"
                                        d="M399.2 345.9H112.8c-7.6 0-13.8-6.2-13.8-13.8v-63.7c0-7.6 6.2-13.8 13.8-13.8h286.4c7.6 0 13.8 6.2 13.8 13.8v63.7c.1 7.6-6.1 13.8-13.8 13.8zm-272.6-27.6h258.8v-36H126.6v36zm230.9-95.5h-203c-7.6.2-14-5.8-14.2-13.5s5.8-14 13.5-14.2h203.8c7.6-.2 14 5.8 14.2 13.5s-5.8 14-13.5 14.2h-.8z">
                                    </path>
                                </svg>
                                <h4>FAKULTAS II</h4>
                                <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi
                                    porta gravida at eget metus cras justo.</p>
                                <a href="#" class="more hover link-red">Learn More</a>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                    </div> --}}
                    <div class="col-md-6 col-xl-3">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 454.6"
                                    data-inject-url="{{ asset('assets/landing/img/icons/lineal/chat-2.svg') }}"
                                    class="svg-inject icon-svg icon-svg-md text-green mb-3">
                                    <path class="lineal-fill" d="M131.5 126.8h249V15.2H15.2v256.3h116.3z"></path>
                                    <path class="lineal-stroke"
                                        d="M496.8 194.4c-8.4 0-15.2 6.8-15.2 15.2v158.3h-29.7c-8.4 0-15.2 6.8-15.2 15.2 0 .5 0 1.1.1 1.6l2.8 27.2-75.7-42.1c-2.3-1.3-4.8-1.9-7.4-1.9H146.7V142h233.8c8.4 0 15.2-6.8 15.2-15.2V15.2c0-8.4-6.8-15.2-15.2-15.2H15.2C6.8 0 0 6.8 0 15.2v256.3c0 8.4 6.8 15.2 15.2 15.2h101v96.4c0 8.4 6.8 15.2 15.2 15.2h221l97.8 54.3c7.3 4.1 16.6 1.4 20.7-5.9 1.5-2.7 2.2-5.9 1.8-9l-4.1-39.5h28.1c8.4 0 15.2-6.8 15.2-15.2V209.6c.1-8.4-6.7-15.2-15.1-15.2zM30.4 256.3V30.4h334.8v81.2H131.5c-8.4 0-15.2 6.8-15.2 15.2v129.5H30.4z">
                                    </path>
                                    <path class="lineal-stroke"
                                        d="M413.8 223.6H214.4c-8.4 0-15.2-6.8-15.2-15.2s6.8-15.2 15.2-15.2h199.4c8.4 0 15.2 6.8 15.2 15.2s-6.8 15.2-15.2 15.2zm0 85.9H214.4c-8.4 0-15.2-6.8-15.2-15.2S206 279 214.4 279h199.4c8.4 0 15.2 6.8 15.2 15.2s-6.8 15.3-15.2 15.3z">
                                    </path>
                                </svg>
                                <h4>KMS</h4>
                                <p class="mb-2">Knowledge Management System.</p>
                                <a href="{{ url('/kms') }}" class="more hover link-green">Selengkapnya</a>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                    </div>
                    <!--/column -->
                    <div class="col-md-6 col-xl-3">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 409.6 362.5"
                                    data-inject-url="{{ asset('assets/landing/img/icons/lineal/megaphone.svg') }}"
                                    class="svg-inject icon-svg icon-svg-md text-blue mb-3">
                                    <path class="lineal-stroke"
                                        d="M343.4 302.9L61 302.5c-25.3-.2-47.5-16.8-54.8-40.9l-3.9-12.9c-7.1-24.2 2.5-50.3 23.5-64.2L262.1 29.8c5.7-3.7 13.3-2.1 17 3.6.7 1 1.2 2.1 1.5 3.2l74.3 249.8c2.4 6.4-.9 13.5-7.3 15.8-1.3.5-2.8.7-4.2.7zM261.8 59.4L39.3 205c-12 7.9-17.4 22.8-13.4 36.6l3.8 12.9c4.2 13.8 16.8 23.3 31.2 23.4l265.8.4-64.9-218.9z">
                                    </path>
                                    <path class="lineal-stroke"
                                        d="M138 362.5c-40.4 0-72.8-31.1-73.6-70.8 0-6.8 5.5-12.3 12.3-12.3 6.6 0 12.1 5.2 12.3 11.8.6 26.2 22.1 46.7 49 46.7 14.2 0 27.7-6.2 37-16.9 4.5-5.1 12.2-5.7 17.4-1.2 5.1 4.5 5.7 12.2 1.2 17.4-14 16.1-34.3 25.3-55.6 25.3z">
                                    </path>
                                    <path class="lineal-fill"
                                        d="M183.4 96l57.8 194.5 102.1.1-74.5-250.5L183.4 96z"></path>
                                    <path class="lineal-stroke"
                                        d="M343.4 302.9l-102.1-.1c-5.4 0-10.2-3.6-11.8-8.8L171.6 99.5c-1.6-5.2.5-10.8 5.1-13.8l85.4-55.9c5.7-3.7 13.3-2.1 17 3.6.7 1 1.2 2.1 1.5 3.2l74.5 250.6c1.9 6.5-1.8 13.4-8.3 15.3-1.1.2-2.3.4-3.4.4zm-92.9-24.7l76.4.1-65.1-218.9-63.9 41.8 52.6 177z">
                                    </path>
                                    <path class="lineal-stroke"
                                        d="M351.8 330.6c-5.4 0-10.2-3.6-11.8-8.8l-91-306c-2.1-6.5 1.3-13.4 7.8-15.6 6.5-2.1 13.4 1.3 15.6 7.8.1.3.2.5.2.8l91 305.9c1.9 6.5-1.8 13.4-8.3 15.3-1.1.4-2.3.6-3.5.6zM338 91.7c-6.8 0-12.3-5.5-12.3-12.3 0-1.8.4-3.6 1.2-5.3l13.4-28.5c2.9-6.2 10.2-8.8 16.4-5.9 6.2 2.9 8.8 10.2 5.9 16.4l-13.4 28.5c-2.1 4.3-6.4 7.1-11.2 7.1zm28.2 64.9c-6.8 0-12.3-5.5-12.3-12.3 0-5.7 3.9-10.6 9.4-12l31.1-7.5c6.6-1.5 13.2 2.6 14.7 9.3 1.5 6.5-2.5 13-9 14.7l-31.2 7.4c-.8.3-1.8.4-2.7.4zm29.1 90c-2.7 0-5.4-.9-7.5-2.6l-24.9-19.4c-5.4-4.2-6.3-11.9-2.2-17.3s11.9-6.3 17.3-2.2l24.9 19.4c5.4 4.2 6.3 11.9 2.1 17.3-2.3 3-5.9 4.7-9.7 4.8z">
                                    </path>
                                </svg>
                                <h4>LMS</h4>
                                <p class="mb-2">Learning Management System.</p>
                                <a href="{{ url('/login-option') }}" class="more hover link-blue">Selengkapnya</a>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /.position-relative -->
        </div>
        <!-- /.container -->
    </section>

    <section class="wrapper bg-light" id="nav-visimisi">
        <div class="container py-16 py-md-18">
            <div class="row gx-lg-8 gx-xl-12 gy-10 mb-8 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <figure><img class="w-auto" src="{{ asset('assets/landing/img/illustrations/i22.jpg') }}"
                            srcset="{{ asset('assets/landing/img/illustrations/i22@2x.png') }} 2x" alt=""></figure>
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <h3 class="display-4 mb-7">VISI DAN MISI</h3>
                    <div class="accordion accordion-wrapper" id="accordionExample">
                        <div class="card plain accordion-item">
                            <div class="card-header" id="headingOne">
                                <button class="accordion-button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne"> VISI</button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Menjadi pusat pengembangan kompetensi sumber daya manusia.</p>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                        <!--/.accordion-item -->
                        <div class="card plain accordion-item">
                            <div class="card-header" id="headingTwo">
                                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo"> MISI </button>
                            </div>
                            <!--/.card-header -->
                            <div id="collapseTwo" class="accordion-collapse collapse show"
                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                                        <li><span><i class="uil uil-check"></i></span><span>Menciptakan sistem
                                                pengembangan kompetensi sumber daya manusia terintegrasi</span></li>
                                        <li class="mt-3"><span><i
                                                    class="uil uil-check"></i></span><span>Membangun aliansi dengan
                                                mitra strategis dan potensial (universitas, pusat pengembangan
                                                kepemimpinan, dan pusat kajian bisnis, asosiasi, pelaku industri
                                                lainnya)</span></li>
                                        <li class="mt-3"><span><i
                                                    class="uil uil-check"></i></span><span>Membangun solusi
                                                pengembangan kompetensi yang aplikatif</span></li>
                                        <li class="mt-3"><span><i
                                                    class="uil uil-check"></i></span><span>Mengoptimalkan pusat
                                                asesmen yang handal dalam mendukung proses pengembangan</span></li>
                                    </ul>
                                </div>
                                <!--/.card-body -->
                            </div>
                            <!--/.accordion-collapse -->
                        </div>
                    </div>
                    <!--/.accordion -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>

    <section class="wrapper bg-gradient-reverse-primary" id="nav-logo">
        <div class="container py-13 py-md-16">
            <div class="row gx-lg-8 gx-xl-12 gy-10 mb-8 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <h3 class="display-4 mb-7">MAKNA LOGO</h3>
                    <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                        <li><span><i class="uil uil-check"></i></span><span>Warna Tri Datu yang melingkupi seluruh
                                logo dimaknai bahwa implementasi Kerti Bali Sejatera Corporate University (KBS
                                Corpu) mengandung muatan nilai-nilai kearifan lokal sesuai dengan Visi Nangun Sat
                                Kerthi Loka Bali. Karena seperti kita ketahui, Tri Datu melambangkan keselarasan,
                                keseimbangan, dan keharmonisan antara manusia dengan alam semesta, mencakup tiga
                                aspek keberadaan Tuhan, manusia, dan alam semesta, sesuai konsep Tri Hita Karana
                                yang telah mendunia (world class). Tri Datu ini juga menjadi identitas budaya yang
                                khas (unik) bagi masyarakat Bali dan menjadi ciri khas yang melekat dalam kehidupan
                                sehari-hari masyarakat Bali</span></li>
                        <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Sekilas gambar logo
                                terdapat wujud Ganesha: yang bermakna wujud kebijaksanaan, pengetahuan, kreativitas,
                                dan seni budaya</span></li>
                        <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Paling atas terdapat
                                sket Gapura Bali yang terdiri dari 6 (enam) bidang berwarna hitam yang bermakna
                                mewujudkan misi ke-6 terkait pembangunan SDM. Enam bidang hitam pembentuk sket
                                Gapura Bali yang merupakan 3 (tiga) pasang bidang hitam yang juga merujuk kepada
                                huruf “KBS” yang merupakan singkatan dari “Kerthi Bali Sejahtera”: sket hurut “K”
                                pada sepasang bidang hitam yang kiri, sket huruf “B” sepasang bidang hitam yang
                                tengah, dan sket huruf “S” pada sepasang bidang hitam yang paling kanan</span></li>
                        <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Bidang huruf hitam
                                putih di bawah sket gapura hitam, yang nampak seperti belalai gajah merujuk pada
                                huruf “CU” yang saling terkait memberi makna kepada “Corporate University” merupakan
                                system pembelajaran terintegrasi, mencakup: bidang pembentuk huruf “C” yang berwarna
                                hitam merupakan akronim “Corporate” dan bidang huruf “U”yang berwarna putih
                                merupakan akronim “University”</span></li>
                        <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Tulisan Kerti Bali
                                Sejahtera Corporate University adalah mempertegas makna logo</span></li>
                    </ul>
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <figure><img class="w-auto mx-auto d-block" src="{{ asset('assets/landing/img/logo-big.png') }}"
                            srcset="{{ asset('assets/landing/img/logo-big.png') }} 2x" alt=""></figure>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>

    <section id="nav-galeri" id="snippet-2" class="wrapper bg-light wrapper-border angled upper-end lower-end">
        <div class="container pt-15 pt-md-17 pb-13 pb-md-15">
            <div class="row">
                <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto text-center">
                    <h3 class="display-4 mb-7">GALERI</h3>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <div class="swiper-container grid-view mb-6 swiper-container-0" data-margin="30" data-dots="true"
                data-items-xl="3" data-items-md="2" data-items-xs="1">
                <div class="swiper swiper-initialized swiper-horizontal swiper-pointer-events">
                    <div class="swiper-wrapper" id="swiper-wrapper-4e7374f38ce4e189" aria-live="off"
                        style="cursor: grab; transform: translate3d(0px, 0px, 0px);">
                        <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 6"
                            style="width: 410px; margin-right: 30px;">
                            <figure class="rounded mb-6"><img src="{{ asset('assets/landing/img/photos/pd7.jpg') }}"
                                    srcset="{{ asset('assets/landing/img/photos/pd7@2x.jpg') }} 2x" alt=""><a
                                    class="item-link swiper-no-swiping" href="{{ asset('assets/landing/img/photos/pd7-full.jpg') }}"
                                    data-glightbox="" data-gallery="projects-group"><i
                                        class="uil uil-focus-add"></i></a></figure>
                            <div class="project-details d-flex justify-content-center flex-column">
                                <div class="post-header">
                                    <h2 class="post-title h3"><a href="single-project.html"
                                            class="link-dark">Cras Fermentum Sem</a></h2>
                                    <div class="post-category text-ash">Stationary</div>
                                </div>
                                <!-- /.post-header -->
                            </div>
                            <!-- /.project-details -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 6"
                            style="width: 410px; margin-right: 30px;">
                            <figure class="rounded mb-6"><img src="{{ asset('assets/landing/img/photos/pd8.jpg') }}"
                                    srcset="{{ asset('assets/landing/img/photos/pd8@2x.jpg') }} 2x" alt=""><a
                                    class="item-link swiper-no-swiping" href="{{ asset('assets/landing/img/photos/pd8-full.jpg') }}"
                                    data-glightbox="" data-gallery="projects-group"><i
                                        class="uil uil-focus-add"></i></a></figure>
                            <div class="project-details d-flex justify-content-center flex-column">
                                <div class="post-header">
                                    <h2 class="post-title h3"><a href="single-project2.html"
                                            class="link-dark">Mollis Ipsum Mattis</a></h2>
                                    <div class="post-category text-ash">Magazine, Book</div>
                                </div>
                                <!-- /.post-header -->
                            </div>
                            <!-- /.project-details -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide" style="width: 410px; margin-right: 30px;" role="group"
                            aria-label="3 / 6">
                            <figure class="rounded mb-6"><img src="{{ asset('assets/landing/img/photos/pd9.jpg') }}"
                                    srcset="{{ asset('assets/landing/img/photos/pd9@2x.jpg') }} 2x" alt=""><a
                                    class="item-link swiper-no-swiping" href="{{ asset('assets/landing/img/photos/pd9-full.jpg') }}"
                                    data-glightbox="" data-gallery="projects-group"><i
                                        class="uil uil-focus-add"></i></a></figure>
                            <div class="project-details d-flex justify-content-center flex-column">
                                <div class="post-header">
                                    <h2 class="post-title h3"><a href="single-project3.html"
                                            class="link-dark">Ipsum Ultricies Cursus</a></h2>
                                    <div class="post-category text-ash">Packaging</div>
                                </div>
                                <!-- /.post-header -->
                            </div>
                            <!-- /.project-details -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide" role="group" aria-label="4 / 6"
                            style="width: 410px; margin-right: 30px;">
                            <figure class="rounded mb-6"><img src="{{ asset('assets/landing/img/photos/pd10.jpg') }}"
                                    srcset="{{ asset('assets/landing/img/photos/pd10@2x.jpg') }} 2x" alt=""><a
                                    class="item-link swiper-no-swiping" href="{{ asset('assets/landing/img/photos/pd10-full.jpg') }}"
                                    data-glightbox="" data-gallery="projects-group"><i
                                        class="uil uil-focus-add"></i></a></figure>
                            <div class="project-details d-flex justify-content-center flex-column">
                                <div class="post-header">
                                    <h2 class="post-title h3"><a href="single-project.html"
                                            class="link-dark">Inceptos Euismod Egestas</a></h2>
                                    <div class="post-category text-ash">Stationary, Branding</div>
                                </div>
                                <!-- /.post-header -->
                            </div>
                            <!-- /.project-details -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide" role="group" aria-label="5 / 6"
                            style="width: 410px; margin-right: 30px;">
                            <figure class="rounded mb-6"><img src="{{ asset('assets/landing/img/photos/pd11.jpg') }}"
                                    srcset="{{ asset('assets/landing/img/photos/pd11@2x.jpg') }} 2x" alt=""><a
                                    class="item-link swiper-no-swiping" href="{{ asset('assets/landing/img/photos/pd11-full.jpg') }}"
                                    data-glightbox="" data-gallery="projects-group"><i
                                        class="uil uil-focus-add"></i></a></figure>
                            <div class="project-details d-flex justify-content-center flex-column">
                                <div class="post-header">
                                    <h2 class="post-title h3"><a href="single-project2.html"
                                            class="link-dark">Ipsum Mollis Vulputate</a></h2>
                                    <div class="post-category text-ash">Packaging</div>
                                </div>
                                <!-- /.post-header -->
                            </div>
                            <!-- /.project-details -->
                        </div>
                        <!--/.swiper-slide -->
                        <div class="swiper-slide" role="group" aria-label="6 / 6"
                            style="width: 410px; margin-right: 30px;">
                            <figure class="rounded mb-6"><img src="{{ asset('assets/landing/img/photos/pd12.jpg') }}"
                                    srcset="{{ asset('assets/landing/img/photos/pd12@2x.jpg') }} 2x" alt=""><a
                                    class="item-link swiper-no-swiping" href="{{ asset('assets/landing/img/photos/pd12-full.jpg') }}"
                                    data-glightbox="" data-gallery="projects-group"><i
                                        class="uil uil-focus-add"></i></a></figure>
                            <div class="project-details d-flex justify-content-center flex-column">
                                <div class="post-header">
                                    <h2 class="post-title h3"><a href="single-project3.html"
                                            class="link-dark">Porta Ornare Cras</a></h2>
                                    <div class="post-category text-ash">Branding</div>
                                </div>
                                <!-- /.post-header -->
                            </div>
                            <!-- /.project-details -->
                        </div>
                        <!--/.swiper-slide -->
                    </div>
                    <!--/.swiper-wrapper -->
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
                <!-- /.swiper -->
                <div class="swiper-controls">
                    <div
                        class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                        <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                            role="button" aria-label="Go to slide 1" aria-current="true"></span><span
                            class="swiper-pagination-bullet" tabindex="0" role="button"
                            aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet"
                            tabindex="0" role="button" aria-label="Go to slide 3"></span><span
                            class="swiper-pagination-bullet" tabindex="0" role="button"
                            aria-label="Go to slide 4"></span></div>
                </div>
            </div>
            <!-- /.swiper-container -->
        </div>
        <!-- /.container -->
    </section>
@endsection