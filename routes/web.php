<?php

use App\Http\Controllers\CatalogosController;
use App\Http\Controllers\CombustibleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ApiAppsController;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\PrestamoController;
use App\Http\Controllers\LibroController;



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
})->middleware('auth');

Route::get('/listas', function () {
    return view('listas');
})->middleware('auth');

Route::post('/listas', function (Request $request) {
    return response()->json($request->all());
})->name('listas')->middleware('auth');

Auth::routes(['register'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function(){

    Route::prefix('')->group(function(){
        Route::prefix('categoria')->group(function () {
            Route::get('', [CategoriasController::class, 'index'])->name('categoria');
            Route::get('add', [CategoriasController::class, 'add'])->name('categoria.add');
            Route::post('', [CategoriasController::class, 'store'])->name('categoria.store');
            Route::delete('{model}', [CategoriasController::class, 'destroy'])->name('categoria.delete');
            Route::get('edit/{model}', [CategoriasController::class,'show'])->name('categoria.edit');
            Route::patch('{model}', [CategoriasController::class, 'update'])->name('categoria.update');
        });
        
        Route::prefix('libro')->group(function () {
            Route::get('', [LibroController::class, 'index'])->name('libro');
            Route::get('add', [LibroController::class, 'add'])->name('libro.add');
            Route::post('', [LibroController::class, 'store'])->name('libro.store');
            Route::delete('{model}', [LibroController::class, 'destroy'])->name('libro.delete');
            Route::get('edit/{model}', [LibroController::class, 'show'])->name('libro.edit');
            Route::patch('{model}', [LibroController::class, 'update'])->name('libro.update');

        });
        Route::prefix('prestamo')->group(function () {
            Route::get('', [PrestamoController::class, 'index'])->name('prestamo');
            Route::get('add', [PrestamoController::class, 'add'])->name('prestamo.add');
            Route::post('', [PrestamoController::class, 'store'])->name('prestamo.store');
            Route::delete('{model}', [PrestamoController::class, 'destroy'])->name('prestamo.delete');
            Route::get('edit/{model}', [PrestamoController::class, 'show'])->name('prestamo.edit');
            Route::patch('{model}', [PrestamoController::class, 'update'])->name('prestamo.update');    
        });
 
        
   
        
        Route::prefix('catalogos')->group(function () {
            Route::get('combustible', [CatalogosController::class, 'getCombustibles']);
        });
    });
});


Route::middleware('auth')->group(function(){
    Route::prefix('api-app')->group(function(){
        Route::get('libros', [ApiAppsController::class, 'libros']);
        Route::get('sexos', [ApiAppsController::class, 'sexos']);
        Route::get('categorias', [ApiAppsController::class, 'categorias']);
        Route::get('personas', [ApiAppsController::class, 'personas']);
    });
});


/*
Rutas para catalogos de la apib
*/
