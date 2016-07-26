<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
  return '<h1>Primeira lógica com Laravel</h1';
});

Route::get('/produtos', 'ProdutoController@lista');
Route::get('/produtos/mostra/{id}', 'ProdutoController@mostra');
Route::get('/produtos/edita/{id}', 'ProdutoController@edita');
Route::get('/produtos/remove/{id}', 'ProdutoController@remove');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::get('/produtos/json', 'ProdutoController@listaJson');
Route::post('/produtos/adiciona', 'ProdutoController@adiciona');
Route::post('/produtos/altera', 'ProdutoController@altera');
