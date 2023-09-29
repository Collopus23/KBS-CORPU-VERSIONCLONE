<nav class="navbar navbar-expand-lg center-nav transparent position-absolute navbar-dark">
    <div class="container flex-lg-row flex-nowrap align-items-center">
        <div class="navbar-brand w-100">
            <a href="<?php echo e(url('/')); ?>">
                <img src="<?php echo e(asset('assets/landing/img/logo-dark.png')); ?>" srcset="<?php echo e(asset('assets/landing/img/logo-dark@2x.png')); ?> 2x"
                    alt="" />
            </a>
        </div>
        <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
                <h3 class="text-white fs-30 mb-0">KBS Corpu</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#nav-beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#nav-tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#nav-framework">Framework</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#nav-visimisi">Visi dan Misi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#nav-logo">Tentang Logo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#nav-galeri">Galeri</a>
                    </li>
                    <?php
                        use Illuminate\Support\Str;
                        
                        // if use already authenticated on SSO
                        $initial = "";
                        if(!empty(session('authUserData'))){
                            $initial = ucwords(strtolower(session('authUserData')->user->name));
                        }
                    ?>
                    <?php if(!session('UserIsAuthenticated')): ?>
                    <li class="nav-item d-lg-none">
                        <a class="nav-link" href="<?php echo e(url('/login-option')); ?>">Login</a>
                    </li>
                    <?php else: ?>
                    <li class="nav-item dropdown d-lg-none">
                        <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="align-items-center"><i class="uil uil-user"></i> <?php echo e($initial); ?></span>
                        </a>
                        <ul class="dropdown-menu">
                          <li class="nav-item"><a class="dropdown-item" target="_blank" href="<?php echo e(url('/dashboard')); ?>">Buka Aplikasi <i class="uil uil-external-link-alt"></i></a></li>
                        </ul>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <?php if(!session('UserIsAuthenticated')): ?>
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link" href="<?php echo e(url('/login-option')); ?>"><i class="uil uil-user"></i> Login</a>
                </li>
                <?php else: ?>
                <li class="nav-item dropdown d-none d-lg-block">
                    <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="align-items-center"><i class="uil uil-user"></i> <?php echo e($initial); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a class="dropdown-item" target="_blank" href="<?php echo e(url('/dashboard')); ?>">Buka Aplikasi <i class="uil uil-external-link-alt"></i></a></li>
                    </ul>
                </li>
                <?php endif; ?>
                <li class="nav-item d-lg-none">
                    <button class="hamburger offcanvas-nav-btn"><span></span></button>
                </li>
            </ul>
            <!-- /.navbar-nav -->
        </div>
        <!-- /.navbar-other -->
    </div>
    <!-- /.container -->
</nav><?php /**PATH T:\Clone KBS CORPU\kbs-corpu\resources\views/landing/nav-verse-1.blade.php ENDPATH**/ ?>