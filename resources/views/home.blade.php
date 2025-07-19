@extends('layout')

@section('title', 'Inicio - Sistema de Gestión')

@section('content')
<div class="space-y-8">
    <!-- Header Section -->
    <div class="text-center">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">
            Bienvenido al Sistema de Gestión
        </h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Gestiona tus servicios, proyectos y clientes de manera eficiente y profesional
        </p>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Servicios Card -->
        <div class="bg-white rounded-lg shadow-md p-6 border border-gray-200 hover:shadow-lg transition-shadow duration-300">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                        <i class="fas fa-tools text-blue-600 text-xl"></i>
                    </div>
                </div>
                <div class="ml-4">
                    <h3 class="text-lg font-semibold text-gray-900">Servicios</h3>
                    <p class="text-2xl font-bold text-blue-600">
                        {{ \App\Models\Servicio::count() }}
                    </p>
                    <p class="text-sm text-gray-500">Servicios disponibles</p>
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ route('servicios.index') }}" 
                   class="inline-flex items-center text-sm font-medium text-blue-600 hover:text-blue-700">
                    Ver todos los servicios
                    <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
        </div>

        <!-- Proyectos Card -->
        <div class="bg-white rounded-lg shadow-md p-6 border border-gray-200 hover:shadow-lg transition-shadow duration-300">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                        <i class="fas fa-project-diagram text-green-600 text-xl"></i>
                    </div>
                </div>
                <div class="ml-4">
                    <h3 class="text-lg font-semibold text-gray-900">Proyectos</h3>
                    <p class="text-2xl font-bold text-green-600">
                        {{ \App\Models\Proyecto::count() }}
                    </p>
                    <p class="text-sm text-gray-500">Proyectos activos</p>
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ route('proyectos.index') }}" 
                   class="inline-flex items-center text-sm font-medium text-green-600 hover:text-green-700">
                    Ver todos los proyectos
                    <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
        </div>

        <!-- Clientes Card -->
        <div class="bg-white rounded-lg shadow-md p-6 border border-gray-200 hover:shadow-lg transition-shadow duration-300">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                        <i class="fas fa-users text-purple-600 text-xl"></i>
                    </div>
                </div>
                <div class="ml-4">
                    <h3 class="text-lg font-semibold text-gray-900">Clientes</h3>
                    <p class="text-2xl font-bold text-purple-600">
                        {{ \App\Models\Cliente::count() }}
                    </p>
                    <p class="text-sm text-gray-500">Clientes registrados</p>
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ route('clientes.index') }}" 
                   class="inline-flex items-center text-sm font-medium text-purple-600 hover:text-purple-700">
                    Ver todos los clientes
                    <i class="fas fa-arrow-right ml-1"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="bg-white rounded-lg shadow-md p-6 border border-gray-200">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Acciones Rápidas</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <a href="{{ route('servicios.create') }}" 
               class="flex items-center p-4 bg-blue-50 rounded-lg hover:bg-blue-100 transition-colors duration-200">
                <i class="fas fa-plus text-blue-600 mr-3"></i>
                <span class="font-medium text-blue-900">Nuevo Servicio</span>
            </a>
            
            <a href="{{ route('proyectos.create') }}" 
               class="flex items-center p-4 bg-green-50 rounded-lg hover:bg-green-100 transition-colors duration-200">
                <i class="fas fa-plus text-green-600 mr-3"></i>
                <span class="font-medium text-green-900">Nuevo Proyecto</span>
            </a>
            
            <a href="{{ route('clientes.create') }}" 
               class="flex items-center p-4 bg-purple-50 rounded-lg hover:bg-purple-100 transition-colors duration-200">
                <i class="fas fa-plus text-purple-600 mr-3"></i>
                <span class="font-medium text-purple-900">Nuevo Cliente</span>
            </a>
            
            <a href="{{ route('blog') }}" 
               class="flex items-center p-4 bg-orange-50 rounded-lg hover:bg-orange-100 transition-colors duration-200">
                <i class="fas fa-blog text-orange-600 mr-3"></i>
                <span class="font-medium text-orange-900">Ver Blog</span>
            </a>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="bg-white rounded-lg shadow-md p-6 border border-gray-200">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Actividad Reciente</h2>
        <div class="space-y-4">
            @php
                $recentItems = collect();
                
                // Obtener servicios recientes
                $recentServicios = \App\Models\Servicio::latest()->take(3)->get();
                foreach($recentServicios as $servicio) {
                    $recentItems->push([
                        'type' => 'servicio',
                        'title' => $servicio->titulo,
                        'date' => $servicio->created_at,
                        'route' => route('servicios.show', $servicio),
                        'icon' => 'fas fa-tools',
                        'color' => 'blue',
                        'photo' => null
                    ]);
                }
                
                // Obtener proyectos recientes
                $recentProyectos = \App\Models\Proyecto::latest()->take(3)->get();
                foreach($recentProyectos as $proyecto) {
                    $recentItems->push([
                        'type' => 'proyecto',
                        'title' => $proyecto->titulo,
                        'date' => $proyecto->created_at,
                        'route' => route('proyectos.show', $proyecto),
                        'icon' => 'fas fa-project-diagram',
                        'color' => 'green',
                        'photo' => null
                    ]);
                }
                
                // Obtener clientes recientes
                $recentClientes = \App\Models\Cliente::latest()->take(3)->get();
                foreach($recentClientes as $cliente) {
                    $recentItems->push([
                        'type' => 'cliente',
                        'title' => $cliente->nombre_completo,
                        'date' => $cliente->created_at,
                        'route' => route('clientes.show', $cliente),
                        'icon' => 'fas fa-user',
                        'color' => 'purple',
                        'photo' => $cliente->foto_url
                    ]);
                }
                
                $recentItems = $recentItems->sortByDesc('date')->take(5);
            @endphp
            
            @if($recentItems->count() > 0)
                @foreach($recentItems as $item)
                    <div class="flex items-center p-4 bg-gray-50 rounded-lg">
                        <div class="flex-shrink-0">
                            @if($item['photo'] && $item['type'] === 'cliente')
                                <img src="{{ $item['photo'] }}" 
                                     alt="Foto de {{ $item['title'] }}" 
                                     class="w-10 h-10 rounded-full object-cover border-2 border-gray-200">
                            @else
                                <div class="w-10 h-10 bg-{{ $item['color'] }}-100 rounded-lg flex items-center justify-center">
                                    <i class="{{ $item['icon'] }} text-{{ $item['color'] }}-600"></i>
                                </div>
                            @endif
                        </div>
                        <div class="ml-4 flex-1">
                            <h4 class="text-sm font-medium text-gray-900">
                                <a href="{{ $item['route'] }}" class="hover:text-{{ $item['color'] }}-600">
                                    {{ ucfirst($item['type']) }}: {{ $item['title'] }}
                                </a>
                            </h4>
                            <p class="text-sm text-gray-500">
                                Creado {{ $item['date']->diffForHumans() }}
                            </p>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="text-center py-8">
                    <i class="fas fa-inbox text-gray-400 text-4xl mb-4"></i>
                    <p class="text-gray-500">No hay actividad reciente</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
