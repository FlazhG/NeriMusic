<?php
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;


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

Route::get('users/create', [UserController::class, 'index'])->name('user.index');

Route::get('users/create', [UserController::class, 'create'])->name('user.create');

Route::post('users', [UserController::class, 'store'])->name('users.store');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/musics', function () {
    return view('music.up');
});

Route::get('/artists', function () {
    return view('artists');
});

Route::get('/albums', function () {
    return view('albums');
});

Route::get('/menu', function () {
    return view('layouts.menu');
});

?>
