<?php

use App\Http\Controllers\usuariocontroller;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/usuario', [usuariocontroller::class, 'traerusuarios']);

Route::get('/usuario/{idusuario}', [usuariocontroller::class, 'traerusuario']);

Route::get('/index', [usuariocontroller::class, 'mostrarindex']);

Route::post('/crearusuario', [usuariocontroller::class, 'crearusuario'])->name('crearusuario');


Route::delete('/delete', [usuariocontroller::class, 'eliminar']);

Route::put('/update', [usuariocontroller::class,'actualizar'])->name('actualizarusuario');
