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
Route::get('/api', '\App\Http\Controllers\Controller@index');
Route::post('/api', '\App\Http\Controllers\Controller@inserir')->name('api.inserir');
Route::get('/api/editar/{id}', '\App\Http\Controllers\Controller@editar')->name('editar');
Route::post('/api/editado/{id}', '\App\Http\Controllers\Controller@editarImovel');
Route::delete('/api/excluir/{id}', '\App\Http\Controllers\Controller@excluir');