<?php $__env->startSection('landing/content'); ?>
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-300"
        data-image-src="<?php echo e(asset('assets/landing/img/photos/bg3-red.jpg')); ?>">
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
                                        <p>Selamat Datang di Knowledge Management System (KMS) KBS Corporate University Provinsi Bali. KMS merupakan platform berbagi pengetahuan berbasis wiki yang dikembangkan oleh BKPSDM Provinsi Bali sebagai sumber bertukar informasi, berbagi pengetahuan dan transfer pengetahuan tentang Ilmu Manajemen Kepegawaian, Aplikasi Manajemen Kepegawaian, SOP, Peraturan, dsb baik untuk kebutuhan Umum, Internal Stakeholder BKPSDM instansi maupun untuk kebutuhan internal BKPSDM Provinsi Bali.</p>
                                        <h2 class="post-title mt-4 mb-0">Visi Misi Slogan</h2>
                                        <h4 class="post-title mt-2 mb-0">Slogan: Orang bisa berganti, Pengetahuan harus selalu abadi</h4>
                                        <h4 class="post-title mt-2 mb-0">VISI: Menjadi pusat pengembangan kompetensi sumber daya manusia.</h4>
                                        <h4 class="post-title mt-2 mb-0">MISI:</h4>
                                        <p class="mt-1 mb-0">1. Menciptakan sistem pengembangan kompetensi sumber daya manusia terintegrasi</p>
                                        <p class="mt-1 mb-0">2. Membangun aliansi dengan mitra strategis dan potensial (universitas, pusat pengembangan kepemimpinan, dan pusat kajian bisnis, asosiasi, pelaku industri lainnya)</p>
                                        <p class="mt-1 mb-0">3. Membangun solusi pengembangan kompetensi yang aplikatif</p>
                                        <p class="mt-1 mb-0">4. Mengoptimalkan pusat asesmen yang handal dalam mendukung proses pengembangan</p>
                                        <h2 class="post-title mt-4 mb-0">Bagian KMS</h2>
                                        <p>KMS dibagi menjadi 3 bagian:</p>
                                        <p>1. <a class="hover text-info" href="<?php echo e(url('/kms/ensiklopedia-kepegawaian-umum')); ?>">Ensiklopedia Kepegawaian Umum</a> berisikan pengetahuan dasar Ilmu Kepegawaian berdasarkan peraturan perundang-undangan dalam format Ensiklopedia bertaut layaknya Wikipedia.</p>
                                        <p>2. <a class="hover text-info" href="<?php echo e(url('/login-option')); ?>">Knowledge Instansi</a> berisikan pengetahuan spesifik untuk kebutuhan khusus BKPSDM instansi pemerintah mitra kerja KBS Corpu Provinsi Bali. Untuk mengakses fitur ini, Anda harus login menggunakan akun yang telah teregistrasi.</p>
                                        <p>3. Knowledge Internal KBS Corpu Provinsi Bali berisikan pengetahuan spesifik untuk internal KBS Corpu Provinsi Bali</p>
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
                            <li><span><i class="uil uil-arrow-right"></i></span><a class="hover text-success" href="<?php echo e(url('/kms')); ?>"> Mulai</a></li>
                            <li><span><i class="uil uil-arrow-right"></i></span><a class="hover text-dark" href="<?php echo e(url('/kms/ensiklopedia-kepegawaian-umum')); ?>"> Ensiklopedia Kepegawaian Umum</a></li>
                            <li><span><i class="uil uil-arrow-right"></i></span><a class="hover text-dark" href="<?php echo e(url('/login-option')); ?>"> Knowledge Instansi</a></li>
                            <li><span><i class="uil uil-arrow-right"></i></span><a class="hover text-dark" href="https://sso.baliprov.dev"> Knowledge Internal KBS Corpu Provinsi Bali</a></li>
                            <li><span><i class="uil uil-arrow-right"></i></span><a class="hover text-muted" href="<?php echo e(url('/login-option')); ?>"> E-learning & Quiz</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('landing/master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH T:\Clone KBS CORPU\kbs-corpu\resources\views/kms/beranda.blade.php ENDPATH**/ ?>