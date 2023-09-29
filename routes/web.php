<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SSOBrokerController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginOptionController;
use App\Http\Controllers\LoginEksternalController;
use App\Http\Controllers\KMSController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// SSO
// Route::get('backend/login', [SSOBrokerController::class, 'authenticateToSSO']);
Route::get('authenticateToSSO', [SSOBrokerController::class, 'authenticateToSSO']);
Route::get('authData/{authData}', [SSOBrokerController::class, 'authenticateToSSO']);
Route::get('logout/{sessionId}', [SSOBrokerController::class, 'logout']);
Route::get('changeRole/{role}', [SSOBrokerController::class, 'changeRole'])->name('changeRole');

// Open Route
Route::get('/', [LandingController::class, 'index']);
Route::get('/kms', [KMSController::class, 'index']);
Route::get('/kms/ensiklopedia-kepegawaian-umum', [KMSController::class, 'ensiKepegUmum']);
Route::get('/kms/sistem-kerja-pada-instansi-pemerintah-untuk-penyederhanaan-birokrasi', [KMSController::class, 'artikel1']);
Route::get('/kms/manajemen-talenta', [KMSController::class, 'artikel2']);
Route::get('/kms/berakhlak', [KMSController::class, 'artikel3']);
Route::get('/kms/aparatur-sipil-negara', [KMSController::class, 'artikel4']);
Route::get('/kms/pegawai-negeri-sipil', [KMSController::class, 'artikel5']);
Route::get('/kms/pegawai-pemerintah-dengan-perjanjian-kerja', [KMSController::class, 'artikel6']);
Route::get('/kms/presiden', [KMSController::class, 'artikel7']);
Route::get('/kms/kementerian-pan-dan-rb', [KMSController::class, 'artikel8']);
Route::get('/kms/uu-no-5-tahun-2014', [KMSController::class, 'artikel9']);
Route::get('/kms/penyusunan-dan-penetapan-kebutuhan-pns', [KMSController::class, 'artikel10']);

// Guest Only Route
Route::group(['middleware' => ['guest']], function () {
    Route::get('/login-option', [LoginOptionController::class, 'index']);
    Route::get('/login-eksternal', [LoginEksternalController::class, 'index']);
    Route::get('/sign-up', [SignUpController::class, 'index']);
});

// Authenticated Only Route
Route::group(['middleware' => ['loggedIn']], function () {
    Route::get('ddAuth', function() {
        dd(session('authUserData'));
    });

    Route::get('ddSSO', function() {
        dd(session('ssoUserData'));
    });
    Route::get('defaultRole', function() {
        dd(session('ssoDefRole'));
    });
    
    Route::get('dashboard', [DashboardController::class, 'index']);
});

Route::get('dd2', function() {
    dd(session('authUserData'));
});

Route::get('dd3', function() {
    dd(session('ssoUserData'));
});

Route::get('sessAll', function() {
    dd(session()->all());
}) ;