@extends('lms/master')

@section('lms/content')
    <div class="main-content side-content pt-0">

        <div class="main-container container-fluid">
            <div class="inner-body">

                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Dashboard KBS Corporate University</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">KBS Corpu</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </div>
                    <div class="d-flex">
                        <div class="justify-content-center">
                            <button type="button" class="btn btn-white btn-icon-text my-2 me-2">
                                <i class="fe fe-filter me-2"></i> Filter
                            </button>
                            <button type="button" class="btn btn-success my-2 btn-icon-text">
                                <i class="fe fe-download-cloud me-2"></i> Download Report
                            </button>
                        </div>
                    </div>
                </div>
                <!-- End Page Header -->

                <!--Row-->
                <div class="row row-sm">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-sm-12 col-lg-12 col-xl-8">
                                @if (Session::has('message'))
                                    <div class="alert alert-{{ Session::get('alert-class') }}" role="alert">
                                        <button aria-label="Close" class="btn-close" data-bs-dismiss="alert" type="button">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        {!! Session::get('message') !!}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-lg-12 col-xl-8">
                        <!--Row-->
                        <div class="row row-sm">
                            <div class="col-sm-12 col-lg-12 col-xl-12">
                                <div class="card bg-primary custom-card card-box">
                                    <div class="card-body p-4">
                                        <div class="row align-items-center">
                                            <img src="{{ asset('assets/user-area/img/pngs/work3.png') }}" alt="user-img">
                                            <div class="offset-xl-3 offset-sm-6 col-xl-8 col-sm-6 col-12 img-bg ">
                                                <h4 class="d-flex mb-3">
                                                    <span class="font-weight-bold text-white ">Selamat Datang! <br>
                                                        {{ session('authUserData')->user->name }}</span>
                                                </h4>
                                                <p class="tx-white-7 mb-1">Anda telah login ke dalam sistem KBS Corporate University
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Row -->
                    </div>

                    <div class="col-sm-12 col-lg-12 col-xl-4">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="row row-sm">
                                    <div class="card-item-title"> 
                                        <label class="main-content-label tx-13 font-weight-bold mb-2">Role Aktif</label> 
                                        <span class="d-block tx-12 mb-0 text-muted">Role anda saat ini adalah:</span> 
                                    </div>
                                    <p class="mb-0 mt-2">
                                        <b class="text-primary tx-24 me-2"><i class="fe fe-user"></i> {{ session('defaultRole')->name }}</b>
                                        <a href="javascript:void(0)"  data-bs-target="#modalChangeRole" data-bs-toggle="modal" class="text-muted"><i class="fe fe-edit"></i> Ganti Role</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if(session('defaultRole')->name == "Admin Corpu")
                        @include('lms/dashboard-admin-corpu');
                    @elseif (session('defaultRole')->name == "Admin OPD")
                        @include('lms/dashboard-admin-opd');
                    @endif
                    
                </div><!-- Row end -->
            </div>
        </div>
    </div>
@endsection
