<?php


Route::get('/', 'HomeController@index');


Route::get('/movies/{id}', 'MoviesController@searchMovieId');

Route::get('/movies/search/{title}', 'MoviesController@searchMoviesByTitle');