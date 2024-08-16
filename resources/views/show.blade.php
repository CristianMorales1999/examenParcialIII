@extends('layout')

@section('title', ucfirst($type) . ' | ' . $resource->titulo ?? $resource->nombres)

@section('content')
    <tr>
        <td colspan="6" class="servicios"><b>{{ strtoupper($type) }} {{ $resource->id }}</b></td>
    </tr>
    <tr>
        <td colspan="6"><b>Nombre:</b> {{ $resource->titulo ?? $resource->nombres }}</td>
    </tr>
    @if($type === 'cliente')
        <tr>
            <td colspan="6"><b>Apellidos:</b> {{ $resource->apellidos }}</td>
        </tr>
        <tr>
            <td colspan="6"><b>Email:</b> {{ $resource->email }}</td>
        </tr>
        <tr>
            <td colspan="6"><b>Dirección:</b> {{ $resource->direccion }}</td>
        </tr>
        <tr>
            <td colspan="6"><b>Teléfono:</b> {{ $resource->telefono }}</td>
        </tr>
    @else
        <tr>
            <td colspan="6"><b>Descripción:</b> {{ $resource->descripcion }}</td>
        </tr>
    @endif
    <tr>
        <td colspan="6" align="center">{{ $resource->created_at->diffForHumans() }}</td>
    </tr>
@endsection
