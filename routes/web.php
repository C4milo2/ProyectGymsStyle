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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/compras', function () {
    return view('components.compras');
});

Route::get('/Section', function () {
    return view('components.Section');
});







Route::get('/Mañana', function () {
    return view('components/Horarios/Maandtar.Mañana');
});

Route::get('/Tarde', function () {
    return view('components/Horarios/Maandtar.Tarde');
});

Route::get('/Perfil', function () {
    return view('components/Perfil');
});