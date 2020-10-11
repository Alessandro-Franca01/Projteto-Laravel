<?php

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

# É passado dois parametros: 1° o path da requisição, 2° pode ser varias coisas " função, controller, etc"
Route::get('/', function () {
    return view('welcome'); // Esse returno  da função deve ser outro metodo que redireciona para a pagina 'welcome'
});

# Rota para testes: FUNCIONANDO!
Route::get('/teste', function () {
    return view('teste'); 
});

# Rota usando um controller no lugar da função: Testar!
//Route::get('/teste2', 'BookController@index');

# Rota do tipo RESOURCER: FUNCIONANDO!
Route::resource('/book', 'BookController'); // Deu certo!!

