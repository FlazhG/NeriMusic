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

Route::get('/terminosycondiciones', function () {
    return view('terminosycondiciones');
});

//Rutas de user
Route::resource('user', UserController::class);
Route::get('desactivar/{id}',[UserController::class, 'desactivar'])->name('desactivar');
Route::get('activar/{id}',[UserController::class, 'activar'])->name('activar');
Route::get('destroy/{id}',[UserController::class, 'destroy'])->name('destroy');

//Ruta de pdf de user
Route::name('export')->get('export',[UserController::class,'export']);
Route::name('import')->post('import',[UserController::class,'import']);

//Ruta de pdf
Route::name('pdfuser')->get('pdfuser',[UserController::class,'gePdfUser']);
Route::name('pdfalbum')->get('pdfalbum',[AlbumController::class,'gePdfalbum']);
Route::name('pdfmusic')->get('pdfmusic',[MusicController::class,'gePdfmusic']);
Route::name('pdfartis')->get('pdfartis',[ArtistsController::class,'gePdfartis']);
//Rutas de music
Route::resource('musics',MusicController::class);
Route::get('desactivarmusic/{id_music}',[MusicController::class, 'desactivar'])->name('desactivar');
Route::get('activarmusic/{id_music}',[MusicController::class, 'activar'])->name('activar');
Route::get('destroymusic/{id_music}',[MusicController::class, 'destroy'])->name('destroy');

//Rutas de artists
Route::resource('artists',ArtistsController::class);
Route::get('desactivarartist/{id_artis}',[ArtistsController::class, 'desactivar'])->name('desactivar');
Route::get('activarartist/{id_artis}',[ArtistsController::class, 'activar'])->name('activar');
Route::get('destroyartist/{id_artis}',[ArtistsController::class, 'destroy'])->name('destroy');


// Rutas de albums
Route::resource('albums',AlbumController::class);
Route::get('desactivaralbum/{id_album}',[AlbumController::class, 'desactivar'])->name('desactivar');
Route::get('activaralbum/{id_album}',[AlbumController::class, 'activar'])->name('activar');
Route::get('destroyalbum/{id_album}',[AlbumController::class, 'destroy'])->name('destroy');

?>
