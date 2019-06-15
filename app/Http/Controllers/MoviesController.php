<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public $movies = [
        1 => "Toy Story",
        2 => "Depredador 2",
        3 => "Mad Max",
        4 => "Titanic",
        5 => "Freddy Vs. Jason",
        6 => "Arma Mortal 4",
        7 => "Spaceballs",
        8 => "La Pistola Desnuda 33 1/3"
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //EJ CLASE 1 Dentro del controlador MoviesController, crear el método searchMovieId($id) y copiar el array de películas de arrayMovies.php (el array esta copiado mas arriba) - En función del parámetro recibido por URL, retornar el nombre de la película. Considerar que el número de ID es igual a la posición del elemento en el array.

    public function searchMovieId($id)
    {
        return $this->movies[$id];
    }


    //EJ CLASE 1 En función del parámetro recibido por URL, buscar coincidencias con el array de películas. En caso de haber coincidencias, devolver el nombre de la película, de lo contrario, devolver el string “No se encontraron resultados”. Agregamos que busque coincidencias y las liste.

    public function searchMoviesByTitle($title)
    {

        $bolsa = [];

        foreach ($this->movies as $id => $pelicula){
            if(strpos($pelicula, $title)){
                $bolsa[] = $pelicula;
            }
        }        

        if(empty($bolsa)){
            echo "No se encontro ningun resultado";

        } else { 
            echo 'Se encontraron' . ' ' . count($bolsa) . ' resultados' . ':' . '<br>' . '<br>';
            foreach($bolsa as $pollo){
                echo $pollo . '<br>';
            }
        }

    


    }






}
