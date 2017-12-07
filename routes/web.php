<?php



Route::get('/','PostController@index');

//Route::get('posts/{post}', 'PostController@show');

Route::get('posts/create', 'PostController@create');

Route::get('/posts', 'PostController@store');

?>