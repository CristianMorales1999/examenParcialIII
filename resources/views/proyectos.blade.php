@extends('layout')

@section('title','Proyectos')

@section('content')
    <h2>Proyectos</h2>
    <tr>
        <td colspan="6" class="servicios">
            <a href="{{route('proyectos.create')}}">Nuevo Proyecto</a>
        </td>
    </tr>
    
    <tr>
        @if(!$proyectos->isEmpty())
            @foreach($proyectos as $proyecto)
                <td class="servicios" colspan="3">
                    <a href="{{route('proyectos.show',$proyecto)}}">
                        {{$proyecto->titulo}}
                    </a>
                </td>
            @endforeach
        @else
            <td colspan="6">No existe ningun proyecto que mostrar.</td>
        @endif
    </tr>
    <tr>
        <td colspan="6">{{$proyectos->links('pagination::bootstrap-4')}}</td>
    </tr>
@endsection
