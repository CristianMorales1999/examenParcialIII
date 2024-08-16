@extends('layout')

@section('title','Clientes')

@section('content')
    <h2>CLIENTES</h2>
    <tr>
        @if(!$clientes->isEmpty())
            @foreach($clientes as $cliente)
                <td class="servicios" colspan="3">
                    <a href="{{route('clientes.show',$cliente)}}">
                        {{$cliente->nombres}} {{$cliente->apellidos}}
                    </a>
                </td>
            @endforeach
        @else
            <td colspan="6">No existe ningun cliente que mostrar.</td>
        @endif
    </tr>
    <tr>
        <td colspan="6">{{$clientes->links('pagination::bootstrap-4')}}</td>
    </tr>
@endsection
