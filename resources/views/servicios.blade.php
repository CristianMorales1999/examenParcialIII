@extends('layout')

@section('title','Servicios')

@section('content')
    <h2>Servicios</h2>
    <tr>
        <td colspan="6" class="servicios">
            <a href="{{route('servicios.create')}}">Nuevo Servicio</a>
        </td>
    </tr>
    <tr>
        @if(!$servicios->isEmpty())
            @foreach($servicios as $servicio)
                <td class="servicios" colspan="3">
                    <a href="{{route('servicios.show',$servicio)}}">
                        {{$servicio->titulo}}
                    </a>
                </td>
            @endforeach
        @else
            <td colspan="6">No existe ningun servicio que mostrar.</td>
        @endif
    </tr>
    <tr>
        <td colspan="6">{{$servicios->links('pagination::bootstrap-4')}}</td>
    </tr>
@endsection
