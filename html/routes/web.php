<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\MesasController;
use App\Http\Controllers\ReservasController;
use App\Http\Controllers\TicketsController;
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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

//app 1

Route::get('/login', function () {
    return view('app.index');
})->name('login');


Route::get('registrar', function () {
    return view('app.registrar');
})->name('registrar');




Route::get('/', function () {
    return view('app.menu');
})->name('menu');

Route::get('productos3', function () {
    return view('app.productos');
})->name('productos3');






//app2


Route::get('dentro', function () {
    return view('app2.menu');
})->name('menu2');

Route::get('productos2', function () {
    return view('app2.productos');
})->name('productos2');


Route::get('reserva2', function () {
    return view('app2.reserva');
})->name('reserva2');
Route::get('reservas2', function () {
    return view('app2.reservas');
})->name('reservas2');

Route::get('crearreserva2', function () {
    return view('app2.crearreserva');
})->name('crearreserva2');

Route::get('misreservas', function () {
    return view('app2.misreservas');
})->name('misreservas');

Route::get('zona2', function () {
    return view('app2.zona');
})->name('zona2');

//app3

Route::get('admin', function () {
    return view('app3.menu');
})->name('menu3');

Route::get('administrar', function () {
    return view('app3.administrar');
})->name('administrar');

Route::get('crear', function () {
    return view('app3.crear');
})->name('crear');


Route::get('crearcat', function () {
    return view('app3.crearcat');
})->name('crearcat');


Route::get('productos', function () {
    return view('app3.productos');
})->name('productos');

Route::get('crearpro', function () {
    return view('app3.crearpro');
})->name('crearpro');

Route::get('mesas', function () {
    return view('app3.mesas');
})->name('mesas');

Route::get('crearmesa', function () {
    return view('app3.crearmesa');
})->name('crearmesa');

Route::get('reserva3', function () {
    return view('app3.reserva');
})->name('reserva3');

Route::get('reservas3', function () {
    return view('app3.reservas');
})->name('reservas3');

Route::get('crearreserva', function () {
    return view('app3.crearreserva');
})->name('crearreserva');

Route::get('zona', function () {
    return view('app3.zona');
})->name('zona');

Route::get('reservasactuales', function () {
    return view('app3.reservasactuales');
})->name('reservasactuales');

Route::get('comandas', function () {
    return view('app3.comandas');
})->name('comandas');

Route::get('comandazona', function () {
    return view('app3.comandazona');
})->name('comandazona');

Route::get('ticket', function () {
    return view('app3.ticket');
})->name('ticket');

Route::get('ticketcat', function () {
    return view('app3.ticketcat');
})->name('ticketcat');

Route::get('ticketpro', function () {
    return view('app3.ticketpro');
})->name('ticketpro');

Route::get('editarticket', function () {
    return view('app3.editarticket');
})->name('editarticket');



//login
Route::post('login', [ClientesController::class, 'login'])->name('user.login');
//crear
//usuarios
Route::post('registrar', [ClientesController::class, 'store'])->name('registro');

Route::post('crear', [ClientesController::class, 'store2'])->name('crear');

//categorias
Route::post('crearcat', [CategoriasController::class, 'storecat'])->name('crearcat');

//mesas
Route::post('crearmesa', [MesasController::class, 'storemesa'])->name('crearmesa');

//productos
Route::post('crearpro', [ProductosController::class, 'storepro'])->name('crearpro');

//Reservas
Route::post('crearreserva', [ReservasController::class, 'storereserva'])->name('crearreserva');
Route::post('crearreserva2', [ReservasController::class, 'storereserva2'])->name('crearreserva2');

Route::get('/selectview', 'ClientesController@get');


//borrar
//categorias
Route::delete('/{id}', [CategoriasController::class, 'destroycat'])->name('destroycat');

//productos
Route::post('borrar-producto/{id}', [ProductosController::class, 'destroypro'])->name('destroypro');

//clientes
Route::post('/{id}', [ClientesController::class, 'destroy'])->name('destroy');

//mesas
Route::post('borrar-mesa/{id}', [MesasController::class, 'destroymesa'])->name('destroymesa');

//reservas
Route::post('borrar-reserva/{id}', [ReservasController::class, 'destroyreserva'])->name('destroyreserva');
Route::post('borrar-reserva2/{id}', [ReservasController::class, 'destroyreserva2'])->name('destroyreserva2');
//mesas
//UPDATE
Route::post('update-mesa/{numero}', [MesasController::class, 'update']);
//tickets
//añadir producto
Route::post('anadir-producto/{id}', [TicketsController::class, 'añadorticket'])->name('añadorticket');
Route::post('vaciar/{id}', [TicketsController::class, 'vaciar'])->name('vaciar');
Route::post('borrar-ticket/{id}', [TicketsController::class, 'destroyticket'])->name('destroyticket');
Route::post('editarticket/{id}', [TicketsController::class, 'updateticket'])->name('updateticket');