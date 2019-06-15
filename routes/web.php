<?php


Route::get('/', 'HomeController@index');


Route::get('/movies/{id}', 'MoviesController@searchMovieId');

Route::get('/movies/search/{title}', 'MoviesController@searchMoviesByTitle');


//EJ CLASE 2 rutas MOVIES
Route::get('movies', 'MoviesController@index');
Route::get ('movies/{id}', 'MoviesController@show');
Route::get ('pelicula/{id}', function($id)
    {
        $vac = compact("id");
        return view ("moviedetails", $vac);
    });
Route::get ('movies/new', 'MoviesController@create');
Route::post ('/movies/new', 'MoviesController@store');


//EJ CLASE 2 rutas ACTORS
Route::get('actors', 'ActorsController@index');
Route::get ('actors/{id}', 'ActorsController@show');
Route::get ('actors/new', 'ActorsController@create');
Route::post ('/actors/new', 'ActorsController@store');

//EJ CLASE 2 rutas GENRES
Route::get('genres', 'GenresController@index');
Route::get ('genres/{id}', 'GenresController@show');
Route::get ('genres/new', 'GenresController@create');
Route::post ('/genres/new', 'GenresController@store');


