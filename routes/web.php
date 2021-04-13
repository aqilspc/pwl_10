<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\CariController;
use App\Http\Controllers\ArticleController;
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
    return redirect('mahasiswa');
});
Route::get('/article/cetak_pdf',[ArticleController::class,'cetak_pdf']);
Route::resource('article',ArticleController::class);
Route::resource('mahasiswa',MahasiswaController::class);
Route::get('nilai/{nim}',[MahasiswaController::class,'nilai']);