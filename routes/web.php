<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\RecursoController;
use App\Http\Controllers\CategoriaController;

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
    return view('index');
});


//Route::get('/bienvenida/{nombre}/{apellido?}', function ($nombre, $apellido=null) {
//    return view('bienvenida',compact('nombre','apellido'));

//});

Route::resource('productos', ProductosController::class)->middleware('auth');
Route::resource('recurso', RecursoController::class)->middleware('auth');
Route::resource('categoria', CategoriaController::class)->middleware('auth');
/*
//listado de productos
Route::get('/productos',[ProductosController::class, 'index']);
Route::get('/productos/create',[ProductosController::class, 'create']);
Route::post('/productos',[ProductosController::class, 'store']); //guarda la db
Route::get('/productos/{producto}',[ProductosController::class, 'show']);
Route::get('/productos/{producto}/edit',[ProductosController::class, 'edit']);
Route::post('/productos/{producto}',[ProductosController::class, 'update']);
Route::post('/productos/{producto}/delete',[ProductosController::class, 'destroy']);
//Guardar en BD registro de producto
Route::post('productos', function(Request $request) {
    //dd("llega a metodo para guardar");
    //recibe datos
    //valida
    //guarda
    //direcciona
    return redirect('/productos');
});
*/

/*
Route::get('productos/{id}', function () {
    //
});

Route::get('productos/{id}/edit', function () {
    //
});
//Actualiza Registro en BD
Route::post('productos/{id}', function(Request $request) {
    //dd("llega a metodo para guardar");
    //recibe datos
    //valida
    //guarda
    //direcciona
    return redirect('/productos');
});
*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
