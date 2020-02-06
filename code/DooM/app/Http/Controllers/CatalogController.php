<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Pelicula;

class CatalogController extends Controller
{
    public function getIndex()
    {
		$peliculas = Pelicula::all();
        return view('catalog.index', array('arrayPeliculas'=>$peliculas));
    }

    public function getShow($id)
    {
		$peliculas = Pelicula::all();
        return view('catalog.show', array('pelicula'=>$peliculas[$id]));
    }
    
    public function getCreate()
    {
		$peliculas = Pelicula::all();
        return view('catalog.create');
    }
    
    public function getEdit()
    {
		$peliculas = Pelicula::all();
        return view('catalog.edit', array('id'=>$id));
    }

}
