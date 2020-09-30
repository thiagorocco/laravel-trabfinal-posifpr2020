<?php

Route::get('/','HomeController@index');

Route::get('/series','SeriesController@listar');

#Route::get('/series/listar','SeriesController@listar');

Route::get('/series/nova','SeriesController@nova');

Route::post('/series/adiciona','SeriesController@adiciona');

Route::get('/series/remove/{id}','SeriesController@remove');

Route::post('/series/alterar','SeriesController@alterar');

Route::get('/series/atualiza/{id}','SeriesController@atualiza');


/*
Route::get('/series', [
	'as' => 'apelido',
	'uses' => 'ProdutoController@lista'
]);
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
