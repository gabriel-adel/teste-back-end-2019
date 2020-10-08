<?php

use Illuminate\Http\Request;
Route::post('login', 'UsersController@login');

Route::group(['prefix' => 'product','middleware' => 'jwt.auth'],function(){
    Route::post('insert','ProdutosController@insertProduct');
    Route::delete('delete','ProdutosController@deleteProduct');
    Route::get('showAll','ProdutosController@getAllProduct');
    Route::get('showOne','ProdutosController@getOneProduct');
    Route::put('edit','ProdutosController@editProduct');
});

Route::group([
    'middleware' => 'jwt.auth',
    'prefix' => 'auth'
    ], function () {
        Route::post('logout', 'UsersController@logout');
        Route::post('refresh', 'UsersController@refresh');
        Route::post('me', 'UsersController@me');
});