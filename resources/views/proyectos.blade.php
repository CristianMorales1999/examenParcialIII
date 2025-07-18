@extends('layout')

@section('title', 'Proyectos - Sistema de Gestión')

@section('content')
<div class="space-y-6">
    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Proyectos</h1>
            <p class="mt-2 text-gray-600">Gestiona todos los proyectos activos</p>
        </div>
        <div class="mt-4 sm:mt-0">
            <a href="{{ route('proyectos.create') }}" 
               class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 active:bg-green-900 focus:outline-none focus:border-green-900 focus:ring ring-green-300 disabled:opacity-25 transition ease-in-out duration-150">
                <i class="fas fa-plus mr-2"></i>
                Nuevo Proyecto
            </a>
        </div>
    </div>

    <!-- Projects Grid -->
    @if(!$proyectos->isEmpty())
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($proyectos as $proyecto)
                <div class="bg-white rounded-lg shadow-md border border-gray-200 hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-project-diagram text-green-600"></i>
                                </div>
                                <div class="ml-3">
                                    <h3 class="text-lg font-semibold text-gray-900">
                                        {{ $proyecto->titulo }}
                                    </h3>
                                    <p class="text-sm text-gray-500">ID: {{ $proyecto->id }}</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <p class="text-gray-600 text-sm leading-relaxed">
                                {{ Str::limit($proyecto->descripcion, 120) }}
                            </p>
                        </div>
                        
                        <div class="flex items-center justify-between text-sm text-gray-500 mb-4">
                            <span>
                                <i class="fas fa-calendar-alt mr-1"></i>
                                {{ $proyecto->created_at->format('d/m/Y') }}
                            </span>
                            <span>
                                <i class="fas fa-clock mr-1"></i>
                                {{ $proyecto->created_at->diffForHumans() }}
                            </span>
                        </div>
                        
                        <div class="flex space-x-2">
                            <a href="{{ route('proyectos.show', $proyecto) }}" 
                               class="flex-1 inline-flex justify-center items-center px-3 py-2 bg-green-50 border border-green-200 rounded-md text-sm font-medium text-green-700 hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 transition-colors duration-200">
                                <i class="fas fa-eye mr-1"></i>
                                Ver
                            </a>
                            <a href="{{ route('proyectos.edit', $proyecto) }}" 
                               class="flex-1 inline-flex justify-center items-center px-3 py-2 bg-yellow-50 border border-yellow-200 rounded-md text-sm font-medium text-yellow-700 hover:bg-yellow-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 transition-colors duration-200">
                                <i class="fas fa-edit mr-1"></i>
                                Editar
                            </a>
                            <form action="{{ route('proyectos.destroy', $proyecto) }}" method="POST" class="flex-1" 
                                  onsubmit="return confirm('¿Estás seguro de que quieres eliminar este proyecto?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="w-full inline-flex justify-center items-center px-3 py-2 bg-red-50 border border-red-200 rounded-md text-sm font-medium text-red-700 hover:bg-red-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-colors duration-200">
                                    <i class="fas fa-trash mr-1"></i>
                                    Eliminar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        <!-- Pagination -->
        @if($proyectos->hasPages())
            <div class="mt-8">
                <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6 rounded-lg shadow-sm">
                    <div class="flex-1 flex justify-between sm:hidden">
                        @if($proyectos->onFirstPage())
                            <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-300 bg-gray-50 cursor-not-allowed">
                                Anterior
                            </span>
                        @else
                            <a href="{{ $proyectos->previousPageUrl() }}" 
                               class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                Anterior
                            </a>
                        @endif
                        
                        @if($proyectos->hasMorePages())
                            <a href="{{ $proyectos->nextPageUrl() }}" 
                               class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                Siguiente
                            </a>
                        @else
                            <span class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-300 bg-gray-50 cursor-not-allowed">
                                Siguiente
                            </span>
                        @endif
                    </div>
                    
                    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                        <div>
                            <p class="text-sm text-gray-700">
                                Mostrando 
                                <span class="font-medium">{{ $proyectos->firstItem() }}</span>
                                a 
                                <span class="font-medium">{{ $proyectos->lastItem() }}</span>
                                de 
                                <span class="font-medium">{{ $proyectos->total() }}</span>
                                resultados
                            </p>
                        </div>
                        <div>
                            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                                {{ $proyectos->links() }}
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @else
        <!-- Empty State -->
        <div class="text-center py-12">
            <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-gray-100 mb-4">
                <i class="fas fa-project-diagram text-gray-400 text-xl"></i>
            </div>
            <h3 class="text-lg font-medium text-gray-900 mb-2">No hay proyectos disponibles</h3>
            <p class="text-gray-500 mb-6">Comienza creando tu primer proyecto para gestionar tus iniciativas.</p>
            <a href="{{ route('proyectos.create') }}" 
               class="inline-flex items-center px-4 py-2 bg-green-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-green-700 active:bg-green-900 focus:outline-none focus:border-green-900 focus:ring ring-green-300 disabled:opacity-25 transition ease-in-out duration-150">
                <i class="fas fa-plus mr-2"></i>
                Crear Primer Proyecto
            </a>
        </div>
    @endif
</div>
@endsection
