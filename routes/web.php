<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SaranaController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CommentController;

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

//Route Halaman Home
Route::get('home', [HomeController::class, 'home']);  

//Route Prefix Prodi
Route::prefix('prodi')->group(function(){
    Route::get('/manajemen-informatika', [ProdiController::class, 'mi']);
    Route::get('/teknik-informatika',[ProdiController::class, 'ti']);
});

//Route Parameter News
Route::get('news/{id}', [NewsController::class, 'news']);

//Route Prefix Sarana
Route::prefix('sarana')->group(function(){
    Route::get('/perkantoran', [SaranaController::class, 'perkantoran']);
    Route::get('/laboratorium',[SaranaController::class, 'laboratorium']);
    Route::get('/kelas', [SaranaController::class, 'kelas']);
    Route::get('/lainnya',[SaranaController::class, 'lainnya']);
});

//Route halaman about-us
Route::get('about-us', [AboutController::class, 'about']);

//Route Parameter Halaman Comment
Route::get('/comment/{nama}/{pesan}', [CommentController::class, 'index']);