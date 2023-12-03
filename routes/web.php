<?php

use App\Http\Controllers\SitioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
------Así se pone cuando no hay controlador 
Route::get('/sombrero', function () {
    return view('Landing/sombrero');
});*/


Route::get('/index',[SitioController::class, 'index']);




Route::get('/sombrero', function () {
    return view('Landing/sombrero');
});

Route::get('/casas', function () {
    return view('Landing/casas');
});

Route::get('/historia', function () {
    return view('Landing/historia');
});

Route::get('/personajes', function () {
    return view('Landing/personajes');
});

Route::get('/personas', function () {
    return view('Landing/personas');
});
