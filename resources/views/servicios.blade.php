@extends('layout')

@section('title','Servicios')

@section('content')
    <h2>SERVICIOS</h2>
    <ul>
        @if($servicios)
            @foreach($servicios as $servicio)
                <li>{{$servicio['titulo']}}</li>
            @endforeach
        @else
            <li>No existe ningun servicio que mostrar.</li>
        @endif
    </ul>
@endsection
