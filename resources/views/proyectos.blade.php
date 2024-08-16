@extends('layout')

@section('title','Proyectos')

@section('content')
    <h2>PROYECTOS</h2>
    <ul>
        @if($proyectos)
            @foreach($proyectos as $proyecto)
                <li>{{$proyecto['titulo']}}</li>
            @endforeach
        @else
            <li>No existe ningun proyecto que mostrar.</li>
        @endif
    </ul>
@endsection
