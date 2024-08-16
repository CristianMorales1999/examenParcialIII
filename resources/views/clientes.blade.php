@extends('layout')

@section('title','Clientes')

@section('content')
    <h2>CLIENTES</h2>
    <ul>
        @if($clientes)
            @foreach($clientes as $cliente)
                <li>{{$cliente['titulo']}}</li>
            @endforeach
        @else
            <li>No existe ningun cliente que mostrar.</li>
        @endif
    </ul>
@endsection
