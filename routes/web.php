<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('hola/mundo', 'App\Http\Controllers\holaMundonController@holaMundo_prueba');
    Route::get('estudiante/create', 'App\Http\Controllers\estudiantesController@create');
    Route::post('estudiante/store', 'App\Http\Controllers\estudiantesController@store')->name('estudiante.store');
    Route::get('estudiante/index', 'App\Http\Controllers\estudiantesController@index')->name('estudiante.index');
    Route::put('estudiante/update/{id}', 'App\Http\Controllers\estudiantesController@update')->name('estudiante.update');
    Route::get('estudiante/{id}', 'App\Http\Controllers\estudiantesController@edit')->name('estudiante.edit');
    Route::delete('estudiante/{id}/eliminar', 'App\Http\Controllers\estudiantesController@delete')->name('estudiante.delete');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
