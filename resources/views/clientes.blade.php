@extends('layout')

@section('title', 'Clientes - Sistema de Gestión')

@section('content')
<div class="space-y-6">
    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h1 class="text-3xl font-bold text-gray-900">Clientes</h1>
            <p class="mt-2 text-gray-600">Gestiona todos los clientes registrados</p>
        </div>
        <div class="mt-4 sm:mt-0">
            <a href="{{ route('clientes.create') }}" 
               class="inline-flex items-center px-4 py-2 bg-purple-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-purple-700 active:bg-purple-900 focus:outline-none focus:border-purple-900 focus:ring ring-purple-300 disabled:opacity-25 transition ease-in-out duration-150">
                <i class="fas fa-plus mr-2"></i>
                Nuevo Cliente
            </a>
        </div>
    </div>

    <!-- Clients Grid -->
    @if(!$clientes->isEmpty())
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($clientes as $cliente)
                <div class="bg-white rounded-lg shadow-md border border-gray-200 hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-user text-purple-600 text-lg"></i>
                                </div>
                                <div class="ml-3">
                                    <h3 class="text-lg font-semibold text-gray-900">
                                        {{ $cliente->nombres }} {{ $cliente->apellidos }}
                                    </h3>
                                    <p class="text-sm text-gray-500">ID: {{ $cliente->id }}</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="space-y-2 mb-4">
                            <div class="flex items-center text-sm text-gray-600">
                                <i class="fas fa-envelope w-4 text-gray-400 mr-2"></i>
                                <span class="truncate">{{ $cliente->email }}</span>
                            </div>
                            @if($cliente->telefono)
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-phone w-4 text-gray-400 mr-2"></i>
                                    <span>{{ $cliente->telefono }}</span>
                                </div>
                            @endif
                            @if($cliente->direccion)
                                <div class="flex items-start text-sm text-gray-600">
                                    <i class="fas fa-map-marker-alt w-4 text-gray-400 mr-2 mt-0.5"></i>
                                    <span class="truncate">{{ Str::limit($cliente->direccion, 50) }}</span>
                                </div>
                            @endif
                        </div>
                        
                        <div class="flex items-center justify-between text-sm text-gray-500 mb-4">
                            <span>
                                <i class="fas fa-calendar-alt mr-1"></i>
                                {{ $cliente->created_at->format('d/m/Y') }}
                            </span>
                            <span>
                                <i class="fas fa-clock mr-1"></i>
                                {{ $cliente->created_at->diffForHumans() }}
                            </span>
                        </div>
                        
                        <div class="flex space-x-2">
                            <a href="{{ route('clientes.show', $cliente) }}" 
                               class="flex-1 inline-flex justify-center items-center px-3 py-2 bg-purple-50 border border-purple-200 rounded-md text-sm font-medium text-purple-700 hover:bg-purple-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 transition-colors duration-200">
                                <i class="fas fa-eye mr-1"></i>
                                Ver
                            </a>
                            <a href="{{ route('clientes.edit', $cliente) }}" 
                               class="flex-1 inline-flex justify-center items-center px-3 py-2 bg-yellow-50 border border-yellow-200 rounded-md text-sm font-medium text-yellow-700 hover:bg-yellow-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500 transition-colors duration-200">
                                <i class="fas fa-edit mr-1"></i>
                                Editar
                            </a>
                            <form action="{{ route('clientes.destroy', $cliente) }}" method="POST" class="flex-1" 
                                  onsubmit="return confirm('¿Estás seguro de que quieres eliminar este cliente?')">
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
        @if($clientes->hasPages())
            <div class="mt-8">
                <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6 rounded-lg shadow-sm">
                    <div class="flex-1 flex justify-between sm:hidden">
                        @if($clientes->onFirstPage())
                            <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-300 bg-gray-50 cursor-not-allowed">
                                Anterior
                            </span>
                        @else
                            <a href="{{ $clientes->previousPageUrl() }}" 
                               class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                Anterior
                            </a>
                        @endif
                        
                        @if($clientes->hasMorePages())
                            <a href="{{ $clientes->nextPageUrl() }}" 
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
                                <span class="font-medium">{{ $clientes->firstItem() }}</span>
                                a 
                                <span class="font-medium">{{ $clientes->lastItem() }}</span>
                                de 
                                <span class="font-medium">{{ $clientes->total() }}</span>
                                resultados
                            </p>
                        </div>
                        <div>
                            <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                                {{ $clientes->links() }}
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
                <i class="fas fa-users text-gray-400 text-xl"></i>
            </div>
            <h3 class="text-lg font-medium text-gray-900 mb-2">No hay clientes registrados</h3>
            <p class="text-gray-500 mb-6">Comienza registrando tu primer cliente para gestionar tu cartera.</p>
            <a href="{{ route('clientes.create') }}" 
               class="inline-flex items-center px-4 py-2 bg-purple-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-purple-700 active:bg-purple-900 focus:outline-none focus:border-purple-900 focus:ring ring-purple-300 disabled:opacity-25 transition ease-in-out duration-150">
                <i class="fas fa-plus mr-2"></i>
                Registrar Primer Cliente
            </a>
        </div>
    @endif
</div>
@endsection
