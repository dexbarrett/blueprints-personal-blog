<?php

Route::get('/', array('as' => 'index', 'uses' => 'PostController@getIndex'));
Route::get('logout', array('as' => 'logout', 'uses' => 'UserController@getLogout'));
Route::get('login', array('as' => 'login', 'uses' => 'UserController@getLogin'));

Route::get('post/{id}', 'PostController@getView')
    ->where('id', '[0-9]+');

Route::post('login', array('as' => 'login', 'uses' => 'UserController@postLogin', 'before' => 'csrf'));

Route::group(array('before' => 'auth'), function(){
    Route::get('add', array('as' => 'add_new_post', 'uses' => 'PostController@getAdd'));
    Route::post('add', array('as' => 'add_new_post', 'uses' => 'PostController@postAdd', 'before' => 'csrf'));
});