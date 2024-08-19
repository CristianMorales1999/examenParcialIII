@extends('layout')

@section('title', 'Crear ' . ucfirst($tipo))

@section('content')
    <h2>Nuevo {{ ucfirst($tipo) }}</h2>

    <table cellpadding="3" cellspaceing="5" class="servicios">
        <tr>
            <th colspan="3">Crear nuevo {{ $tipo }}</th>
        </tr>

        <form action="{{ route($tipo . 's.store') }}" method="post">
            @include('partials.form',['btnText'=>'Guardar'])
        </form>
    </table>
@endsection
