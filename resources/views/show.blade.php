@extends('layout')

@section('title', ucfirst($type) . ' #' . $resource->id . ' - Sistema de Gestión')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="bg-white rounded-lg shadow-md border border-gray-200 overflow-hidden">
        <!-- Header -->
        <div class="px-6 py-4 border-b border-gray-200 bg-gradient-to-r from-gray-50 to-gray-100">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    @if($type === 'cliente')
                        <div class="relative mr-4">
                            <img src="{{ $resource->foto_url }}" 
                                 alt="Foto de {{ $resource->nombre_completo }}" 
                                 class="w-20 h-20 rounded-full object-cover border-4 border-white shadow-lg">
                            @if($resource->hasCustomPhoto())
                                <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-green-500 rounded-full border-2 border-white flex items-center justify-center">
                                    <i class="fas fa-check text-white text-xs"></i>
                                </div>
                            @endif
                        </div>
                    @else
                        <div class="w-12 h-12 rounded-lg flex items-center justify-center mr-4
                            @if($type === 'servicio') bg-blue-100 @elseif($type === 'proyecto') bg-green-100 @else bg-purple-100 @endif">
                            <i class="fas 
                                @if($type === 'servicio') fa-tools text-blue-600 @elseif($type === 'proyecto') fa-project-diagram text-green-600 @else fa-user text-purple-600 @endif
                                text-xl"></i>
                        </div>
                    @endif
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900">
                            {{ ucfirst($type) }} #{{ $resource->id }}
                        </h1>
                        <p class="text-lg text-gray-600">
                            {{ $resource->titulo ?? $resource->nombre_completo }}
                        </p>
                    </div>
                </div>
                <div class="flex space-x-2">
                    <a href="{{ route($type.'s.edit', $resource) }}" 
                       class="inline-flex items-center px-4 py-2 bg-yellow-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-700 focus:outline-none focus:border-yellow-700 focus:ring ring-yellow-300 disabled:opacity-25 transition ease-in-out duration-150">
                        <i class="fas fa-edit mr-2"></i>
                        Editar
                    </a>
                    <form action="{{ route($type.'s.destroy', $resource) }}" method="POST" 
                          onsubmit="return confirm('¿Estás seguro de que quieres eliminar este {{ $type }}?')">
                        @csrf 
                        @method('DELETE')
                        <button type="submit" 
                                class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:outline-none focus:border-red-700 focus:ring ring-red-300 disabled:opacity-25 transition ease-in-out duration-150">
                            <i class="fas fa-trash mr-2"></i>
                            Eliminar
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="p-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Main Information -->
                <div class="space-y-6">
                    <div>
                        <h2 class="text-xl font-semibold text-gray-900 mb-4">Información General</h2>
                        
                        @if($type === 'cliente')
                            <div class="space-y-4">
                                <div class="flex items-center p-4 bg-gray-50 rounded-lg">
                                    <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center mr-3">
                                        <i class="fas fa-user text-purple-600"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-gray-500">Nombre Completo</p>
                                        <p class="text-lg font-semibold text-gray-900">
                                            {{ $resource->nombre_completo }}
                                        </p>
                                    </div>
                                </div>
                                
                                <div class="flex items-center p-4 bg-gray-50 rounded-lg">
                                    <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                                        <i class="fas fa-envelope text-blue-600"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-gray-500">Email</p>
                                        <p class="text-lg font-semibold text-gray-900">
                                            <a href="mailto:{{ $resource->email }}" class="hover:text-blue-600 transition-colors">
                                                {{ $resource->email }}
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                
                                @if($resource->telefono)
                                    <div class="flex items-center p-4 bg-gray-50 rounded-lg">
                                        <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center mr-3">
                                            <i class="fas fa-phone text-green-600"></i>
                                        </div>
                                        <div>
                                            <p class="text-sm font-medium text-gray-500">Teléfono</p>
                                            <p class="text-lg font-semibold text-gray-900">
                                                <a href="tel:{{ $resource->telefono }}" class="hover:text-green-600 transition-colors">
                                                    {{ $resource->telefono }}
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                @endif
                                
                                @if($resource->direccion)
                                    <div class="flex items-start p-4 bg-gray-50 rounded-lg">
                                        <div class="w-8 h-8 bg-orange-100 rounded-lg flex items-center justify-center mr-3 mt-1">
                                            <i class="fas fa-map-marker-alt text-orange-600"></i>
                                        </div>
                                        <div>
                                            <p class="text-sm font-medium text-gray-500">Dirección</p>
                                            <p class="text-lg font-semibold text-gray-900">
                                                {{ $resource->direccion }}
                                            </p>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @else
                            <div class="space-y-4">
                                <div class="flex items-center p-4 bg-gray-50 rounded-lg">
                                    <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                                        <i class="fas fa-tag text-blue-600"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-gray-500">Título</p>
                                        <p class="text-lg font-semibold text-gray-900">{{ $resource->titulo }}</p>
                                    </div>
                                </div>
                                
                                <div class="flex items-start p-4 bg-gray-50 rounded-lg">
                                    <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center mr-3 mt-1">
                                        <i class="fas fa-align-left text-green-600"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-gray-500">Descripción</p>
                                        <p class="text-lg font-semibold text-gray-900">{{ $resource->descripcion }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Additional Information -->
                <div class="space-y-6">
                    @if($type === 'cliente')
                        <!-- Photo Section -->
                        <div>
                            <h2 class="text-xl font-semibold text-gray-900 mb-4">Foto del Cliente</h2>
                            <div class="text-center p-6 bg-gray-50 rounded-lg">
                                <img src="{{ $resource->foto_url }}" 
                                     alt="Foto de {{ $resource->nombre_completo }}" 
                                     class="w-48 h-48 rounded-full object-cover border-4 border-white shadow-lg mx-auto mb-4">
                                @if($resource->hasCustomPhoto())
                                    <p class="text-sm text-green-600 font-medium">
                                        <i class="fas fa-check-circle mr-1"></i>
                                        Foto personalizada
                                    </p>
                                @else
                                    <p class="text-sm text-gray-500">
                                        <i class="fas fa-user-circle mr-1"></i>
                                        Avatar generado automáticamente
                                    </p>
                                @endif
                            </div>
                        </div>
                    @endif

                    <div>
                        <h2 class="text-xl font-semibold text-gray-900 mb-4">Información Adicional</h2>
                        
                        <div class="space-y-4">
                            <div class="flex items-center p-4 bg-gray-50 rounded-lg">
                                <div class="w-8 h-8 bg-indigo-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-calendar-alt text-indigo-600"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-500">Fecha de Creación</p>
                                    <p class="text-lg font-semibold text-gray-900">
                                        {{ $resource->created_at->format('d/m/Y H:i') }}
                                    </p>
                                </div>
                            </div>
                            
                            <div class="flex items-center p-4 bg-gray-50 rounded-lg">
                                <div class="w-8 h-8 bg-pink-100 rounded-lg flex items-center justify-center mr-3">
                                    <i class="fas fa-clock text-pink-600"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-500">Tiempo Transcurrido</p>
                                    <p class="text-lg font-semibold text-gray-900">
                                        {{ $resource->created_at->diffForHumans() }}
                                    </p>
                                </div>
                            </div>
                            
                            @if($resource->updated_at != $resource->created_at)
                                <div class="flex items-center p-4 bg-gray-50 rounded-lg">
                                    <div class="w-8 h-8 bg-yellow-100 rounded-lg flex items-center justify-center mr-3">
                                        <i class="fas fa-edit text-yellow-600"></i>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-gray-500">Última Actualización</p>
                                        <p class="text-lg font-semibold text-gray-900">
                                            {{ $resource->updated_at->format('d/m/Y H:i') }}
                                        </p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Actions -->
        <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
            <div class="flex items-center justify-between">
                <a href="{{ route($type.'s.index') }}" 
                   class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Volver al Listado
                </a>
                
                <div class="flex space-x-2">
                    <a href="{{ route($type.'s.edit', $resource) }}" 
                       class="inline-flex items-center px-4 py-2 bg-yellow-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-700 focus:outline-none focus:border-yellow-700 focus:ring ring-yellow-300 disabled:opacity-25 transition ease-in-out duration-150">
                        <i class="fas fa-edit mr-2"></i>
                        Editar
                    </a>
                    <form action="{{ route($type.'s.destroy', $resource) }}" method="POST" class="inline" 
                          onsubmit="return confirm('¿Estás seguro de que quieres eliminar este {{ $type }}?')">
                        @csrf 
                        @method('DELETE')
                        <button type="submit" 
                                class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:outline-none focus:border-red-700 focus:ring ring-red-300 disabled:opacity-25 transition ease-in-out duration-150">
                            <i class="fas fa-trash mr-2"></i>
                            Eliminar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
