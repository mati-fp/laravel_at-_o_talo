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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello-world', [\App\Http\Controllers\HelloWorldController::class, 'helloWorld']);

Route::get('/hello/{name?}', [\App\Http\Controllers\HelloWorldController::class, 'hello']);//parâmetros dinâmicos
//se colocar depois do name o "?" acaba não tornando obrigado digitar a outra rota para acesso
//atribui null(ou outra coisa, um valor padão) a variável name para não dar o erro, pois há dai valor default
// Verbos HTTP: Get, Post, Put, Patch, Delete e Options
