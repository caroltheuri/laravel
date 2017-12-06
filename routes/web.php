<?php



Route::get('/','PostController@index');

Route::get('blogs/{blog}', 'PostController@show');
?>