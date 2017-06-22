<?php

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
Route::get('teste', function () {
    return "Bem Vindo!" .
            "<br>Aqui você encontra os melhores cupons de desconto, aproveite!";
});

Route::get('descontos', 'DescontosController@index');

Route::get('descontos/create', 'DescontosController@create');

Route::post('descontos/store', 'DescontosController@store');

Route::get('descontos/{id}/destroy', 'DescontosController@destroy');

Route::get('descontos/{id}/edit', 'DescontosController@edit');

Route::put('descontos/{id}/update', 'DescontosController@update');