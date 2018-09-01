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
    return view('/index');
});

Route::get('/sobre', function () {
    return view('/sobre');
});


Route::get('/numeros'                    ,'views\NumerosController@index')->name('numeros.index');
Route::get('/numeros/listar'             ,'views\NumerosController@index')->name('numeros.listar');
Route::get('/numeros/atualizar'          ,'views\NumerosController@show')->name('numeros.atualizar');
Route::get('/numero/cadastrar'           ,'views\NumerosController@create')->name('numeros.create');
Route::post('/numero/cadastrar'          ,'views\NumerosController@store')->name('numeros.store');
Route::get('/numero/{id}/atualiza'       ,'views\NumerosController@edit')->name('numeros.edit'); 
Route::post('/numero/{numero}/atualiza'  ,'views\NumerosController@update')->name('numeros.update');
Route::get('/numero/{id}/remove'         ,'views\NumerosController@show')->name('numeros.show'); 
Route::post('/numero/{numero}/remove'    ,'views\NumerosController@destroy')->name('numeros.destroy');


Route::get('/chamadas'                    ,'views\ChamadasController@index')->name('chamadas.index');
Route::get('/chamadas/listar'             ,'views\ChamadasController@index')->name('chamadas.listar');
Route::get('/chamadas/atualizar'          ,'views\ChamadasController@show')->name('chamadas.atualizar');
Route::get('/chamada/cadastrar'           ,'views\ChamadasController@create')->name('chamadas.create');
Route::post('/chamada/cadastrar'          ,'views\ChamadasController@store')->name('chamadas.store');
Route::get('/chamada/{id}/atualiza'       ,'views\ChamadasController@edit')->name('chamadas.edit'); 
Route::post('/chamada/{numero}/atualiza'  ,'views\ChamadasController@update')->name('chamadas.update');
Route::get('/chamada/{id}/remove'         ,'views\ChamadasController@show')->name('chamadas.show'); 
Route::post('/chamada/{chamada}/remove'   ,'views\ChamadasController@destroy')->name('chamadas.destroy');


//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
