<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PSController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class.'index']);

Route::prefix('/prodi')->group(function(){
    Route::get('/manajemen-informatika',[PSController::class.'mi']);
    Route::get('/teknik-informatika',[PSController::class.'ti']);
});

Route::get('/news/{id}', [NewsController::class,'news']);

Route::prefix('sarana')->group(function(){
    Route::get('/perkantoran',[SaranaController::class.'kantor']);
    Route::get('/laboratorium',[SaranaController::class.'lab']);
    Route::get('/kelas',[SaranaController::class.'kelas']);
    Route::get('/lainnya',[SaranaController::class.'lain']);
});

Route::get('/about', [AboutController::class.'about']);

Route::get('/comment/{nama}/pesan/{pesan}', [CommentController::class.'comment']);
