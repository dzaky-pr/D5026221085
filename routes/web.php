<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

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

// ('nama', 'nama_controler@nama_function)

// Route::get('/halo', function () {
//     return ('<marquee>halo, halooooo</marquee>');
// });