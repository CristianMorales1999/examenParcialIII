<?php

use Illuminate\Support\Facades\Route;


Route::view('/','home')->name('home');
Route::resource('servicios','App\Http\Controllers\ServiciosController');
Route::resource('proyectos','App\Http\Controllers\ProyectosController');
Route::resource('clientes','App\Http\Controllers\ClientesController');
Route::view('blog','blog')->name('blog');
Route::view('contacto','contacto')->name('contacto');
