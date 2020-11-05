<?php

use App\Http\Controllers\CatalogosController;
use App\Http\Controllers\CombustibleController;
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

Route::prefix('combustible')->group(function () {
    Route::get('', [CombustibleController::class, 'index'])->name('combustible');
    Route::get('add', [CombustibleController::class, 'add'])->name('combustible.add');
    Route::post('', [CombustibleController::class, 'store'])->name('combustible.store');
    Route::delete('{model}', [CombustibleController::class, 'destroy'])->name('combustible.delete');
    Route::get('edit/{model}', [CombustibleController::class, 'show'])->name('combustible.edit');
    Route::patch('{model}', [CombustibleController::class, 'update'])->name('combustible.update');
});

Route::prefix('catalogos')->group(function () {
    Route::get('combustible', [CatalogosController::class, 'getCombustibles']);
    
});




