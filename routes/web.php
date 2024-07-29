<?php

use App\Http\Controllers\JenispercetakanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Models\Jenispercetakan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// halaman admin
// route::get('/pelanggan', [PelangganController::class, 'index']);
// route::get('/pelanggan', [PelangganController::class, 'show']);

Route::get('/pesanan', function () {
    return view('halamanadmin/pesanan', [
        "title" => "pesanan"
    ]);
});

Route::resource('/jenispercetakan', JenispercetakanController::class);
// Route::delete('jenispercetakan/{id}', [JenispercetakanController::class, 'destroy']);

Route::get('/pelunasan', function () {
    return view('halamanadmin/pelunasan', [
        "title" => "pelunasan"
    ]);
});
Route::get('/admin', function () {
    return view('halamanadmin/profil', [
        "title" => "admin"
    ]);
});

// halaman login
route::get('/', [LoginController::class, 'index'])->name('login');
route::post('/', [LoginController::class, 'authenticate']);

// logout 
route::post('/logout', [LoginController::class, 'logout']);

// halaman registerasi
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// halaman forgot password
Route::get('/forgotpass', function () {
    return view('auth/forgot_pass');
});
Route::get('/edituser', function () {
    return view('halamanpelanggan/edituser');
});

// halaman pelanggan
Route::resource('/pemesanan', PemesananController::class)->middleware('auth');
// Route::post('/pemesanan', [PemesananController::class, 'store'])->name('pemesanan.store');


// halaman user pelanggan
Route::resource('/user', UserController::class)->middleware('auth');
Route::get('/pelanggan', [UserController::class, 'pelanggan']);

// Route::put('datapribadi/{id}', [UserController::class, 'update'])->name('user.update');
// Route::get('datapribadi/{id}', [UserController::class, 'edit'])->name('user.edit');
