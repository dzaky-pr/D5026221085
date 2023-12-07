<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\LatihanEasController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\NadaController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dzaky', function () {
    return view('dzaky');
});

Route::get('/uts', function () {
    return view('uts');
});

Route::get('/tugas1', function () {
    return view('tugas1');
});

Route::get('/tugas2', function () {
    return view('tugas2');
});

Route::get('/form-js1', function () {
    return view('form_js1');
});

Route::get('/form-js2', function () {
    return view('form_js2');
});


Route::get('/form-validasi1', function () {
    return view('form_validasi1');
});

Route::get('/tugas-kelompok-bs-btn', function () {
    return view('tugas-kelompok-bs-btn');
});


Route::get('perkalian', [DosenController::class, 'index']);

Route::get('show', [DosenController::class, 'showBlog']);

Route::get('/pegawai/custom-nama/{nama}', [DosenController::class, 'showNama']);

Route::get('/formulir', [DosenController::class,'formulir']);
Route::post('/formulir/proses', [DosenController::class,'proses']);

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class,'tentang']);
Route::get('/blog/kontak', [BlogController::class,'kontak']);

//route CRUD Pegawai
// halaman utama database pegawai
Route::get('/pegawai', [PegawaiController::class,'index']);

// pegawai tambah
Route::get('/pegawai/tambah', [PegawaiController::class,'tambah']);
Route::post('/pegawai/store',[PegawaiController::class,'store']);

// pegawai edit
Route::get('/pegawai/edit/{id}',[PegawaiController::class,'edit']);
Route::post('/pegawai/update',[PegawaiController::class,'update']);

// pegawai hapus
Route::get('/pegawai/hapus/{id}',[PegawaiController::class,'hapus']);

// cari pegawai
Route::get('/pegawai/cari',[PegawaiController::class,'cari']);

// view pegawai
Route::get('/pegawai/view/{id}',[PegawaiController::class,'view']);

//route CRUD NilaiKuliah
// halaman utama database nilaikuliah
Route::get('/nilaikuliah', [LatihanEasController::class,'index']);

// tambah utama database nilaikuliah
Route::post('/nilaikuliah/store',[LatihanEasController::class,'store']);
Route::get('/nilaikuliah/tambah', [LatihanEasController::class,'tambah']);

// route CRUD Database Buku
// halaman utama database buku
Route::get('/database-buku', [BukuController::class,'index']);

// tambah utama database buku
Route::post('/database-buku/store',[BukuController::class,'store']);
Route::get('/database-buku/tambah', [BukuController::class,'tambah']);

// edit data buku
Route::get('/database-buku/edit/{id}',[BukuController::class,'edit']);
Route::post('/database-buku/update',[BukuController::class,'update']);

// hapus data buku
Route::get('/database-buku/hapus/{id}',[BukuController::class,'hapus']);

// view pegawai
Route::get('/database-buku/view/{id}',[BukuController::class,'view']);

// cari buku
Route::get('/database-buku/cari',[BukuController::class,'cari']);

// BELAJAR ELOQUENT
Route::get('/database-baju',[NadaController::class,'index']);

// Tambah data baju
Route::get('/database-baju/tambah',[NadaController::class,'tambah']);
Route::post('/database-baju/store',[NadaController::class,'store']);

Route::get('/database-baju/edit/{id}',[NadaController::class,'edit']);
Route::post('/database-baju/update',[NadaController::class,'update']);

Route::get('/database-baju/hapus/{id}',[NadaController::class,'hapus']);

Route::get('/database-baju/cari',[NadaController::class,'cari']);