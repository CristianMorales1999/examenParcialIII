@extends('layout')

@section('title', 'Blog - Sistema de Gestión')

@section('content')
<div class="space-y-8">
    <!-- Header -->
    <div class="text-center">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">Blog</h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Descubre las últimas noticias, consejos y mejores prácticas para la gestión de proyectos y servicios
        </p>
    </div>

    <!-- Featured Article -->
    <div class="bg-white rounded-lg shadow-md border border-gray-200 overflow-hidden">
        <div class="md:flex">
            <div class="md:flex-shrink-0">
                <div class="h-48 w-full md:w-48 bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                    <i class="fas fa-newspaper text-white text-4xl"></i>
                </div>
            </div>
            <div class="p-8">
                <div class="uppercase tracking-wide text-sm text-blue-500 font-semibold mb-2">
                    Artículo Destacado
                </div>
                <h2 class="block mt-1 text-2xl leading-tight font-medium text-gray-900 mb-4">
                    Cómo Optimizar la Gestión de Proyectos en 2024
                </h2>
                <p class="mt-2 text-gray-600 mb-4">
                    Descubre las mejores estrategias y herramientas para mejorar la eficiencia en la gestión de proyectos. 
                    Desde metodologías ágiles hasta tecnologías emergentes, te mostramos todo lo que necesitas saber.
                </p>
                <div class="flex items-center justify-between">
                    <div class="flex items-center text-sm text-gray-500">
                        <i class="fas fa-calendar-alt mr-2"></i>
                        <span>15 de Enero, 2024</span>
                    </div>
                    <button class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                        Leer Más
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Articles Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Article 1 -->
        <div class="bg-white rounded-lg shadow-md border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow duration-300">
            <div class="h-48 bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center">
                <i class="fas fa-users text-white text-3xl"></i>
            </div>
            <div class="p-6">
                <div class="text-sm text-green-600 font-semibold mb-2">Gestión de Clientes</div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">
                    Estrategias Efectivas para la Retención de Clientes
                </h3>
                <p class="text-gray-600 text-sm mb-4">
                    Aprende técnicas probadas para mantener a tus clientes satisfechos y fieles a tu empresa.
                </p>
                <div class="flex items-center justify-between">
                    <span class="text-sm text-gray-500">10 de Enero, 2024</span>
                    <button class="text-blue-600 hover:text-blue-700 text-sm font-medium">
                        Leer →
                    </button>
                </div>
            </div>
        </div>

        <!-- Article 2 -->
        <div class="bg-white rounded-lg shadow-md border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow duration-300">
            <div class="h-48 bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center">
                <i class="fas fa-tools text-white text-3xl"></i>
            </div>
            <div class="p-6">
                <div class="text-sm text-purple-600 font-semibold mb-2">Servicios</div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">
                    Mejores Prácticas para la Gestión de Servicios
                </h3>
                <p class="text-gray-600 text-sm mb-4">
                    Optimiza tus procesos de servicio al cliente con estas recomendaciones expertas.
                </p>
                <div class="flex items-center justify-between">
                    <span class="text-sm text-gray-500">8 de Enero, 2024</span>
                    <button class="text-blue-600 hover:text-blue-700 text-sm font-medium">
                        Leer →
                    </button>
                </div>
            </div>
        </div>

        <!-- Article 3 -->
        <div class="bg-white rounded-lg shadow-md border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow duration-300">
            <div class="h-48 bg-gradient-to-br from-orange-400 to-orange-600 flex items-center justify-center">
                <i class="fas fa-chart-line text-white text-3xl"></i>
            </div>
            <div class="p-6">
                <div class="text-sm text-orange-600 font-semibold mb-2">Análisis</div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">
                    Métricas Clave para Medir el Éxito de tu Negocio
                </h3>
                <p class="text-gray-600 text-sm mb-4">
                    Descubre qué indicadores son fundamentales para el crecimiento de tu empresa.
                </p>
                <div class="flex items-center justify-between">
                    <span class="text-sm text-gray-500">5 de Enero, 2024</span>
                    <button class="text-blue-600 hover:text-blue-700 text-sm font-medium">
                        Leer →
                    </button>
                </div>
            </div>
        </div>

        <!-- Article 4 -->
        <div class="bg-white rounded-lg shadow-md border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow duration-300">
            <div class="h-48 bg-gradient-to-br from-red-400 to-red-600 flex items-center justify-center">
                <i class="fas fa-lightbulb text-white text-3xl"></i>
            </div>
            <div class="p-6">
                <div class="text-sm text-red-600 font-semibold mb-2">Innovación</div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">
                    Tecnologías Emergentes en la Gestión Empresarial
                </h3>
                <p class="text-gray-600 text-sm mb-4">
                    Explora las nuevas tecnologías que están transformando la gestión empresarial.
                </p>
                <div class="flex items-center justify-between">
                    <span class="text-sm text-gray-500">3 de Enero, 2024</span>
                    <button class="text-blue-600 hover:text-blue-700 text-sm font-medium">
                        Leer →
                    </button>
                </div>
            </div>
        </div>

        <!-- Article 5 -->
        <div class="bg-white rounded-lg shadow-md border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow duration-300">
            <div class="h-48 bg-gradient-to-br from-indigo-400 to-indigo-600 flex items-center justify-center">
                <i class="fas fa-shield-alt text-white text-3xl"></i>
            </div>
            <div class="p-6">
                <div class="text-sm text-indigo-600 font-semibold mb-2">Seguridad</div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">
                    Protección de Datos en la Era Digital
                </h3>
                <p class="text-gray-600 text-sm mb-4">
                    Asegura la información de tus clientes con estas prácticas de seguridad.
                </p>
                <div class="flex items-center justify-between">
                    <span class="text-sm text-gray-500">1 de Enero, 2024</span>
                    <button class="text-blue-600 hover:text-blue-700 text-sm font-medium">
                        Leer →
                    </button>
                </div>
            </div>
        </div>

        <!-- Article 6 -->
        <div class="bg-white rounded-lg shadow-md border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow duration-300">
            <div class="h-48 bg-gradient-to-br from-teal-400 to-teal-600 flex items-center justify-center">
                <i class="fas fa-rocket text-white text-3xl"></i>
            </div>
            <div class="p-6">
                <div class="text-sm text-teal-600 font-semibold mb-2">Crecimiento</div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">
                    Estrategias de Escalamiento para Pequeñas Empresas
                </h3>
                <p class="text-gray-600 text-sm mb-4">
                    Planifica el crecimiento de tu empresa con estas estrategias comprobadas.
                </p>
                <div class="flex items-center justify-between">
                    <span class="text-sm text-gray-500">30 de Diciembre, 2023</span>
                    <button class="text-blue-600 hover:text-blue-700 text-sm font-medium">
                        Leer →
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter Signup -->
    <div class="bg-gradient-to-r from-blue-600 to-blue-700 rounded-lg shadow-md p-8 text-center">
        <h3 class="text-2xl font-bold text-white mb-4">Suscríbete a Nuestro Newsletter</h3>
        <p class="text-blue-100 mb-6">
            Recibe las últimas noticias y consejos directamente en tu correo electrónico
        </p>
        <div class="max-w-md mx-auto flex">
            <input type="email" 
                   placeholder="Tu correo electrónico" 
                   class="flex-1 px-4 py-2 rounded-l-md border-0 focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-blue-600">
            <button class="px-6 py-2 bg-white text-blue-600 font-semibold rounded-r-md hover:bg-gray-100 transition-colors duration-200">
                Suscribirse
            </button>
        </div>
    </div>
</div>
@endsection
