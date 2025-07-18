<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistema de Gestión')</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'sans': ['Inter', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50: '#eff6ff',
                            100: '#dbeafe',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                            900: '#1e3a8a',
                        }
                    }
                }
            }
        }
    </script>
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Header/Navigation -->
    <header class="bg-white shadow-sm border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo/Brand -->
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <h1 class="text-xl font-bold text-gray-900">
                            <i class="fas fa-cogs text-primary-600 mr-2"></i>
                            Sistema de Gestión
                        </h1>
                    </div>
                </div>
                
                <!-- Navigation -->
                <nav class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}" 
                       class="flex items-center px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 {{ request()->routeIs('home') ? 'bg-primary-100 text-primary-700' : 'text-gray-600 hover:text-primary-600 hover:bg-gray-50' }}">
                        <i class="fas fa-home mr-2"></i>
                        Inicio
                    </a>
                    
                    <a href="{{ route('servicios.index') }}" 
                       class="flex items-center px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 {{ request()->routeIs('servicios.*') ? 'bg-primary-100 text-primary-700' : 'text-gray-600 hover:text-primary-600 hover:bg-gray-50' }}">
                        <i class="fas fa-tools mr-2"></i>
                        Servicios
                    </a>
                    
                    <a href="{{ route('proyectos.index') }}" 
                       class="flex items-center px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 {{ request()->routeIs('proyectos.*') ? 'bg-primary-100 text-primary-700' : 'text-gray-600 hover:text-primary-600 hover:bg-gray-50' }}">
                        <i class="fas fa-project-diagram mr-2"></i>
                        Proyectos
                    </a>
                    
                    <a href="{{ route('clientes.index') }}" 
                       class="flex items-center px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 {{ request()->routeIs('clientes.*') ? 'bg-primary-100 text-primary-700' : 'text-gray-600 hover:text-primary-600 hover:bg-gray-50' }}">
                        <i class="fas fa-users mr-2"></i>
                        Clientes
                    </a>
                    
                    <a href="{{ route('blog') }}" 
                       class="flex items-center px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 {{ request()->routeIs('blog') ? 'bg-primary-100 text-primary-700' : 'text-gray-600 hover:text-primary-600 hover:bg-gray-50' }}">
                        <i class="fas fa-blog mr-2"></i>
                        Blog
                    </a>
                    
                    <a href="{{ route('contacto') }}" 
                       class="flex items-center px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200 {{ request()->routeIs('contacto') ? 'bg-primary-100 text-primary-700' : 'text-gray-600 hover:text-primary-600 hover:bg-gray-50' }}">
                        <i class="fas fa-envelope mr-2"></i>
                        Contacto
                    </a>
                </nav>
                
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button type="button" class="mobile-menu-button bg-white p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary-500">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
            
            <!-- Mobile menu -->
            <div class="mobile-menu hidden md:hidden">
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 border-t border-gray-200">
                    <a href="{{ route('home') }}" 
                       class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('home') ? 'bg-primary-100 text-primary-700' : 'text-gray-600 hover:text-primary-600 hover:bg-gray-50' }}">
                        <i class="fas fa-home mr-2"></i>
                        Inicio
                    </a>
                    
                    <a href="{{ route('servicios.index') }}" 
                       class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('servicios.*') ? 'bg-primary-100 text-primary-700' : 'text-gray-600 hover:text-primary-600 hover:bg-gray-50' }}">
                        <i class="fas fa-tools mr-2"></i>
                        Servicios
                    </a>
                    
                    <a href="{{ route('proyectos.index') }}" 
                       class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('proyectos.*') ? 'bg-primary-100 text-primary-700' : 'text-gray-600 hover:text-primary-600 hover:bg-gray-50' }}">
                        <i class="fas fa-project-diagram mr-2"></i>
                        Proyectos
                    </a>
                    
                    <a href="{{ route('clientes.index') }}" 
                       class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('clientes.*') ? 'bg-primary-100 text-primary-700' : 'text-gray-600 hover:text-primary-600 hover:bg-gray-50' }}">
                        <i class="fas fa-users mr-2"></i>
                        Clientes
                    </a>
                    
                    <a href="{{ route('blog') }}" 
                       class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('blog') ? 'bg-primary-100 text-primary-700' : 'text-gray-600 hover:text-primary-600 hover:bg-gray-50' }}">
                        <i class="fas fa-blog mr-2"></i>
                        Blog
                    </a>
                    
                    <a href="{{ route('contacto') }}" 
                       class="block px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('contacto') ? 'bg-primary-100 text-primary-700' : 'text-gray-600 hover:text-primary-600 hover:bg-gray-50' }}">
                        <i class="fas fa-envelope mr-2"></i>
                        Contacto
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 mt-auto">
        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
            <div class="text-center text-sm text-gray-500">
                <p>&copy; {{ date('Y') }} Sistema de Gestión. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript para mobile menu -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.querySelector('.mobile-menu-button');
            const mobileMenu = document.querySelector('.mobile-menu');
            
            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
            }
        });
    </script>
</body>
</html>