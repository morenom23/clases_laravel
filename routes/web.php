<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hola/mundo', 'App\Http\Controllers\holaMundonController@holaMundo_prueba');
Route::get('estudiante/create', 'App\Http\Controllers\estudiantesController@create');
Route::post('estudiante/store', 'App\Http\Controllers\estudiantesController@store')->name('estudiante.store');
Route::get('estudiante/index','App\Http\Controllers\estudiantesController@index')->name('estudiante.index');
Route::put('estudiante/update/{id}','App\Http\Controllers\estudiantesController@update')->name('estudiante.update');
Route::get('estudiante/{id}','App\Http\Controllers\estudiantesController@edit')->name('estudiante.edit');
Route::delete('estudiante/{id}/eliminar','App\Http\Controllers\estudiantesController@delete')->name('estudiante.delete');