<?php

use Illuminate\Support\Facades\Route;


Route::view('/','home')->name('home');

// Route::get('servicios','App\Http\Controllers\ServiciosController@index')->name('servicios.index');
Route::resource('servicios','App\Http\Controllers\ServiciosController');
// Route::get('proyectos','App\Http\Controllers\ProyectosController@index')->name('proyectos.index');
Route::resource('proyectos','App\Http\Controllers\ProyectosController');
// Route::get('clientes','App\Http\Controllers\ClientesController@index')->name('clientes.index');
Route::resource('clientes','App\Http\Controllers\ClientesController');

Route::view('blog','blog')->name('blog');
Route::view('contacto','contacto')->name('contacto');
