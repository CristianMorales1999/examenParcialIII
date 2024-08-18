@extends('layout')

@section('title', 'Crear ' . ucfirst($tipo))

@section('content')
    <h2>Nuevo {{ ucfirst($tipo) }}</h2>

    <table cellpadding="3" cellspaceing="5" class="servicios">
        <tr>
            <th colspan="3">Crear nuevo {{ $tipo }}</th>
        </tr>

        <form action="{{ route($tipo . 's.store') }}" method="post">
            @csrf

            @if($tipo === 'servicio' || $tipo === 'proyecto')
                <tr>
                    <th>Título: </th>
                    <td>
                        <input type="text" name="titulo" value="{{ old('titulo') }}">
                        <br>{{$errors->first('titulo')}}
                    </td>
                </tr>
                <tr>
                    <th>Descripción: </th>
                    <td>
                        <input type="text" name="descripcion" value="{{ old('descripcion') }}">
                        <br>{{$errors->first('descripcion')}}
                    </td>
                </tr>
            @elseif($tipo === 'cliente')
                <tr>
                    <th>Nombres: </th>
                    <td>
                        <input type="text" name="nombres" value="{{ old('nombres') }}">
                        <br>{{$errors->first('nombres')}}
                    </td>
                </tr>
                <tr>
                    <th>Apellidos: </th>
                    <td>
                        <input type="text" name="apellidos" value="{{ old('apellidos') }}">
                        <br>{{$errors->first('apellidos')}}
                    </td>
                </tr>
                <tr>
                    <th>Email: </th>
                    <td>
                        <input type="email" name="email" value="{{ old('email') }}">
                        <br>{{$errors->first('email')}}
                    </td>
                </tr>
                <tr>
                    <th>Dirección: </th>
                    <td>
                        <input type="text" name="direccion" value="{{ old('direccion') }}">
                        <br>{{$errors->first('direccion')}}
                    </td>
                </tr>
                <tr>
                    <th>Teléfono: </th>
                    <td>
                        <input type="text" name="telefono" value="{{ old('telefono') }}">
                        <br>{{$errors->first('telefono')}}
                    </td>
                </tr>
            @endif

            <tr>
                <td colspan="2" align="center">
                    <button>Guardar</button>
                </td>
            </tr>
        </form>
    </table>
@endsection
