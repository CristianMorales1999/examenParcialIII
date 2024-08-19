@extends('layout')

@section('title', 'Editar ' . ucfirst($tipo))


@section('content')
    <h2>Editar {{ ucfirst($tipo) }}</h2>

    <table cellpadding="3" cellspaceing="5" class="servicios">
        <tr>
            <th colspan="3">Editar {{ $tipo }} {{ $resource->id }}</th>
        </tr>

        <form action="{{ route($tipo . 's.update',$resource) }}" method="post">
            @method('PATCH')
            @include('partials.form',['btnText'=>'Actualizar'])
        </form>
    </table>
@endsection
