<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JenisPembayaranController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PimpinanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Support\Facades\Route;
// use PHPUnit\Framework\Attributes\Group;

Route::get('/',[HomeController::class,'welcome']);

//Login
Route::get('/login',[HomeController::class,'index']);
Route::get('/login',  [HomeController::class,'index'])->name('login');
Route::post('/login', [HomeController::class,'login'])->name('login.post');
Route::post('/logout', [HomeController::class, 'logout'])->name('logout');

//register
Route::get('/register', [RegisterController::class, 'registerform'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);


//untuk admin
Route::middleware([RoleMiddleware::class . 'Admin'])->group (function () {

    //data produk
    Route::get('/produk/index',[ProdukController::class, 'index'])->name('produk.index');
    Route::post('/produk',[ProdukController::class, 'store'])->name('produk.store');
    Route::get('/produk/about',[ProdukController::class,'about'])->name('produk.about');
    Route::get('/produk/{id}/edit',[ProdukController::class,'edit'])->name('produk.edit');
    Route::put('/produk/{id}',[ProdukController::class,'update'])->name('produk.update');
    Route::get('/produk/create',[ProdukController::class, 'create'])->name('produk.create');
    Route::delete('/produk/{id}',[ProdukController::class,'destroy'])->name('produk.destroy');

    //data Petugas
    Route::get('/admin/petugas/index', [AdminController::class,'data_petugas'])->name('admin.petugas.index');
    Route::get('/admin/petugas/create',[AdminController::class, 'create_data_petugas'])->name('admin.petugas.create');
    Route::post('/admin/petugas',[AdminController::class, 'store_data_petugas'])->name('admin.petugas.store');
    Route::delete('/admin/petugas/{id_petugas}',[AdminController::class, 'destroy_data_petugas'])->name('admin.petugas.destroy');
    Route::get('/admin/petugas/{id_petugas}/edit',[AdminController::class, 'edit_data_petugas'])->name('admin.petugas.edit');
    Route::put('/admin/petugas/{id_petugas}',[AdminController::class , 'update_data_petugas'])->name('admin.petugas.update');

    //data jenis pembayaran
    Route::get('/admin/pembayaran',[JenisPembayaranController::class, 'index'])->name('admin.pembayaran.index');
    Route::get('/admin/pembayaran/create', [JenisPembayaranController::class,'create'])->name('admin.pembayaran.create');
    Route::post('/admin/pembayaran',[JenisPembayaranController::class,'store'])->name('admin.pembayaran.store');
    Route::delete('/admin/pembayaran/{id_jenis_pembayaran}',[JenisPembayaranController::class,'destroy'])->name('admin.pembayaran.destroy');
    Route::get('/admin/pembayaran/{id_jenis_pembayaran}/edit',[JenisPembayaranController::class,'edit'])->name('admin.pembayaran.edit');

    //data Konsumen
    Route::get('/admin/konsumen/index',[AdminController::class, 'data_konsumen'])->name('admin.konsumen.index');

});

//untuk Petugas
Route::middleware([RoleMiddleware::class . 'Petugas'])->group (function () {
    Route::get('/petugas',[PetugasController::class,'home'])->name('petugas.index');
    Route::get('petugas/konsumen',[PetugasController::class, 'index'])->name('petugas.konsumen.index');
    Route::get('petugas/konsumen/create', [PetugasController::class , 'create'])->name('petugas.konsumen.create');
    Route::post('/konsumen',[PetugasController::class, 'store'])->name('petugas.konsumen.store');
    Route::get('petugas/konsumen/{id}/edit',[PetugasController::class, 'edit'])->name('petugas.konsumen.edit');
    Route::put('/konsumen/{id}', [PetugasController::class, 'update'])->name('petugas.konsumen.update');
    Route::delete('/konsumen/{id}',[PetugasController::class, 'destroy'])->name('petugas.konsumen.destroy');
});

//untuk Konsumen
Route::middleware([RoleMiddleware::class . 'Pimpinan'])->group (function () {
    Route::get('/pimpinan',[PimpinanController::class,'index'])->name('pimpinan.index');
});
