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
route::get('artists',[ArtistsController::class, 'artists'])->name('artists');
route::post('guardarartists',[ArtistsController::class, 'guardarartists'])->name('guardarartists');
route::get('reporteartists',[ArtistsController::class, 'reporteartists'])->name('reporteartists');
route::get('desactivaartists/{id_artis}',[ArtistsController::class, 'desactivaartists'])->name('desactivaartists');
route::get('activarartists/{id_artis}',[ArtistsController::class, 'activarartists'])->name('activarartists');
route::get('borraartists/{id_artis}',[ArtistsController::class, 'borraartists'])->name('borraartists');
route::get('modificaartists/{id_artis}',[ArtistsController::class, 'modificaartists'])->name('modificaartists');
route::post('guardacambioartists',[ArtistsController::class, 'guardacambioartists'])->name('guardacambioartists');

