<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtistsController;
use App\Http\Controllers\MusicController;


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
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
});


//Rutas de user
Route::resource('user', UserController::class);
Route::get('desactivar/{id}',[UserController::class, 'desactivar'])->name('desactivar');
Route::get('activar/{id}',[UserController::class, 'activar'])->name('activar');
Route::get('destroy/{id}',[UserController::class, 'destroy'])->name('destroy');


//Rutas de music
Route::get('musics',[MusicController::class, 'index'])->name('index');
Route::post('savemusic',[MusicController::class, 'savemusic'])->name('savemusic');
Route::get('reportmusic',[MusicController::class, 'reportmusic'])->name('reportmusic');
//Route::get('desactivaartists/{id_artis}',[ArtistsController::class, 'desactivaartists'])->name('desactivaartists');
//Route::get('activarartists/{id_artis}',[ArtistsController::class, 'activarartists'])->name('activarartists');
//Route::get('borraartists/{id_artis}',[ArtistsController::class, 'borraartists'])->name('borraartists');
//Route::get('modificaartists/{id_artis}',[ArtistsController::class, 'modificaartists'])->name('modificaartists');
//Route::post('guardacambioartists',[ArtistsController::class, 'guardacambioartists'])->name('guardacambioartists');'



//Rutas de artists
Route::get('artists',[ArtistsController::class, 'artists'])->name('artists');
Route::post('guardarartists',[ArtistsController::class, 'guardarartists'])->name('guardarartists');
Route::get('reporteartists',[ArtistsController::class, 'reporteartists'])->name('reporteartists');
Route::get('desactivaartists/{id_artis}',[ArtistsController::class, 'desactivaartists'])->name('desactivaartists');
Route::get('activarartists/{id_artis}',[ArtistsController::class, 'activarartists'])->name('activarartists');
Route::get('borraartists/{id_artis}',[ArtistsController::class, 'borraartists'])->name('borraartists');
Route::get('modificaartists/{id_artis}',[ArtistsController::class, 'modificaartists'])->name('modificaartists');
Route::put('guardacambioartists/{id_artis}',[ArtistsController::class, 'guardacambioartists'])->name('guardacambioartists.guardacambioartists');

// Rutas de albums
Route::resource('albums',AlbumController::class);
Route::get('desactivaralbum/{id_album}',[AlbumController::class, 'desactivar'])->name('desactivar');
Route::get('activaralbum/{id_album}',[AlbumController::class, 'activar'])->name('activar');
Route::get('destroyalbum/{id_album}',[AlbumController::class, 'destroy'])->name('destroy');

?>
