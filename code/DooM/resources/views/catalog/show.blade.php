@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-sm-4">
        <img src="{{$pelicula['poster']}}" style="height:200px"/>
    </div>
    <div class="col-sm-8">
        <h3 style="min-height:46px;margin:6px 0 10px 0">
            {{$pelicula['title']}}
        </h3>
        <h6>
        Año: {{$pelicula['year']}}
        </h6>
        <h6>
        Director: {{$pelicula['director']}}
        </h6>
        <p>
        <h6>Resumen:</h6> {{$pelicula['synopsis']}}
        </p>
        <p>
        <h6>Estado: 
        
        @if ($pelicula['rented'] == true) <span class="text-danger">Pelicula actualmente alquilada</span>
        @else <span class="text-success">Pelicula disponible</span>
        @endif
        </h6>

        </p>
    </div>
</div>
@stop