<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\halaman_controller;
use App\Http\Controllers\Huruf_sibiController;
use App\Http\Controllers\TASYAController;
use App\Http\Controllers\avauploader;

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

Route::get('/404', 'App\Http\Controllers\halaman_controller@error');

Route::get('/index', 'App\Http\Controllers\halaman_controller@index');

Route::get('/about', 'App\Http\Controllers\halaman_controller@about');

Route::get('/testimoni', 'App\Http\Controllers\halaman_controller@testimonial');

Route::get('/masuk', 'App\Http\Controllers\halaman_controller@masuk')->middleware('cek-login');

Route::get('/daftar', 'App\Http\Controllers\halaman_controller@daftar');

Route::get('/kursus', [Huruf_sibiController::class, 'huruf'])->middleware('kursus');

Route::get('/tokoh', 'App\Http\Controllers\halaman_controller@tokoh');

Route::get('/isyarat', 'App\Http\Controllers\halaman_controller@isyarat');

Route::get('/kontak', 'App\Http\Controllers\halaman_controller@kontak');

Route::get('/lupapw', 'App\Http\Controllers\halaman_controller@lupa_pw');

Route::get('/lupa', [halaman_controller::class, 'lupa_pw']);
Route::Post('/lupa', [halaman_controller::class, 'lupaValidasi']);

Route::get('/lupapage', [halaman_controller::class, 'lupa']);

route::get('/reset-pass', [halaman_controller::class, 'reset']);
route::post('/reset-pass', [halaman_controller::class, 'resetValidasi']);

Route::get('/teman-tuli', [halaman_controller::class, 'tuli']);

Route::get('/login', [halaman_controller::class, 'loginValidasi'])->middleware('cek-login');
Route::Post('/login', [halaman_controller::class, 'loginValidasi']);

Route::post('/register', [halaman_controller::class, 'daftarValidasi']);

Route::patch('/tasyas/{tasya}', [TASYAController::class, 'update'])
    ->name('tasyas.update');

Route::resource('tasyas', TASYAController::class);

Route::get('/ava', [avauploader::class, 'ava']);
Route::post('/ava', [avauploader::class, 'prosesupload']);

route::get('/keluar', [halaman_controller::class, 'logout']);

route::get('/belajar', [halaman_controller::class, 'belajar'])->middleware('kursus');

route::get('/abjad', [Huruf_sibiController::class, 'abjad'])->middleware('kursus');

route::get('/abjad/{i}', [Huruf_sibiController::class, 'abjad_index'])->middleware('kursus');

route::get('/video', [Huruf_sibiController::class, 'video'])->middleware('kursus');

route::get('/video/{i}', [Huruf_sibiController::class, 'video_index'])->middleware('kursus');

route::get('/kata/ganti', [Huruf_sibiController::class, 'ganti_orang'])->middleware('kursus');

route::get('/kata/ganti/{i}', [Huruf_sibiController::class, 'ganti_orang_index'])->middleware('kursus');

route::get('/kata/sifat', [Huruf_sibiController::class, 'sifat'])->middleware('kursus');

route::get('/kata/sifat/{i}', [Huruf_sibiController::class, 'sifat_index'])->middleware('kursus');

route::get('/kata/tempat', [Huruf_sibiController::class, 'tempat'])->middleware('kursus');

route::get('/kata/tempat/{i}', [Huruf_sibiController::class, 'tempat_index'])->middleware('kursus');

route::get('/kata/keluarga', [Huruf_sibiController::class, 'keluarga'])->middleware('kursus');

route::get('/kata/keluarga/{i}', [Huruf_sibiController::class, 'keluarga_index'])->middleware('kursus');

route::get('/kata', [Huruf_sibiController::class, 'ganti_orang'])->middleware('kursus');

route::get('/team', [halaman_controller::class, 'tim']);

route::get('/course', [halaman_controller::class, 'course']);

route::get('/hapus', [halaman_controller::class, 'Hapus']);
