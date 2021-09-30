<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TablaclaseController;

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

Route::get('/home', [App\Http\Controllers\TablaclaseController::class, 'index'])->name('home');

Route::post('/home', [TablaclaseController::class, 'store']);

Route::get('/compras', function () {
    return view('components.compras');
});

Route::delete('Eliminar-clase/{id}',[TablaclaseController::class, 'destroy']);


Route::get('/Perfil', function () {
    return view('components/Perfil');
});