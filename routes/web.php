<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtistsController;

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

Route::get('/musics', function () {
    return view('music.up');
});

Route::get('/artist', function () {
    return view('artist.up');
});

Route::get('/albums', function () {
    return view('album.up');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/menu', function () {
    return view('layouts.menu');
});

//Rutas de artists
Route::get('artists',[ArtistsController::class, 'artists'])->name('artists');
Route::post('guardarartists',[ArtistsController::class, 'guardarartists'])->name('guardarartists');
Route::get('reporteartists',[ArtistsController::class, 'reporteartists'])->name('reporteartists');
Route::get('desactivaartists/{id_artis}',[ArtistsController::class, 'desactivaartists'])->name('desactivaartists');
Route::get('activarartists/{id_artis}',[ArtistsController::class, 'activarartists'])->name('activarartists');
Route::get('borraartists/{id_artis}',[ArtistsController::class, 'borraartists'])->name('borraartists');
Route::get('modificaartists/{id_artis}',[ArtistsController::class, 'modificaartists'])->name('modificaartists');
Route::post('guardacambioartists',[ArtistsController::class, 'guardacambioartists'])->name('guardacambioartists');
