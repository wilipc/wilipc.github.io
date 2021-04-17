<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\DocController;

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

Route::get('/clear', function() {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');

    return "Cleared!";

});

Route::get('/', function () {
    return view('auth/login');
});
Auth::routes();
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function(){
    return view('dashboard');
})->name('dashboard');

//Route::get('/dashboard', function(){
//    return view('dashboard');
//})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/perfil', [DocController::class, 'profile'])->name('perfil');
Route::middleware(['auth:sanctum', 'verified'])->get('/curso', [HomeController::class, 'course'])->name('curso');
Route::middleware(['auth:sanctum', 'verified'])->get('/listagrupo', [GroupController::class, 'listgroup'])->name('listagrupo');
Route::middleware(['auth:sanctum', 'verified'])->get('/creargrupo', [GroupController::class, 'addgroup'])->name('creargrupo');
Route::middleware(['auth:sanctum', 'verified'])->get('/lista_alumno', [GroupController::class, 'listalum'])->name('lista_alumno');

Route::middleware(['auth:sanctum', 'verified'])->get('/home', function(){
    return view('home');
})->name('home');
