<?php

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/



use App\Http\Controllers\BackendController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\ComentarioController;


Route::get('/',[FrontendController::class, 'main']);
/*Route::get('backend', [NoticiaController::class, 'index'])->name('backend.index');*/
Route::resource('backend', NoticiaController::class, ['names' => 'backend.ticket']);
Route::get('backend/create', [NoticiaController::class,'create'])->name('backend.create');
Route::get('frontend', [FrontendController::class, 'main'])->name('frontend.main');