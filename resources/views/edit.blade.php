@extends('layout')

@section('title', 'Editar ' . ucfirst($tipo) . ' - Sistema de Gestión')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="bg-white rounded-lg shadow-md border border-gray-200">
        <!-- Header -->
        <div class="px-6 py-4 border-b border-gray-200">
            <div class="flex items-center">
                <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center mr-3">
                    <i class="fas fa-edit text-yellow-600"></i>
                </div>
                <div>
                    <h1 class="text-2xl font-bold text-gray-900">
                        Editar {{ ucfirst($tipo) }}
                    </h1>
                    <p class="text-sm text-gray-600">
                        Modifica la información del {{ $tipo }} #{{ $resource->id }}
                    </p>
                </div>
            </div>
        </div>

        <!-- Form -->
        <div class="p-6">
            <form action="{{ route($tipo . 's.update', $resource) }}" method="post" enctype="multipart/form-data">
                @method('PATCH')
                @include('partials.form', ['btnText' => 'Actualizar ' . ucfirst($tipo)])
            </form>
        </div>
    </div>
</div>
@endsection
