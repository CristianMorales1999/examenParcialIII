@extends('layout')

@section('title', 'Contacto - Sistema de Gestión')

@section('content')
<div class="space-y-8">
    <!-- Header -->
    <div class="text-center">
        <h1 class="text-4xl font-bold text-gray-900 mb-4">Contáctanos</h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            ¿Tienes alguna pregunta o necesitas ayuda? Estamos aquí para asistirte. 
            Envíanos un mensaje y te responderemos lo antes posible.
        </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Contact Form -->
        <div class="bg-white rounded-lg shadow-md border border-gray-200 p-6">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Envíanos un Mensaje</h2>
            
            <form class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="nombre" class="block text-sm font-medium text-gray-700 mb-2">
                            Nombre <span class="text-red-500">*</span>
                        </label>
                        <input type="text" 
                               id="nombre"
                               name="nombre" 
                               class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                               placeholder="Tu nombre completo"
                               required>
                    </div>
                    
                    <div>
                        <label for="apellido" class="block text-sm font-medium text-gray-700 mb-2">
                            Apellido <span class="text-red-500">*</span>
                        </label>
                        <input type="text" 
                               id="apellido"
                               name="apellido" 
                               class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                               placeholder="Tu apellido"
                               required>
                    </div>
                </div>
                
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                        Email <span class="text-red-500">*</span>
                    </label>
                    <input type="email" 
                           id="email"
                           name="email" 
                           class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                           placeholder="tu@email.com"
                           required>
                </div>
                
                <div>
                    <label for="asunto" class="block text-sm font-medium text-gray-700 mb-2">
                        Asunto <span class="text-red-500">*</span>
                    </label>
                    <select id="asunto" 
                            name="asunto" 
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            required>
                        <option value="">Selecciona un asunto</option>
                        <option value="soporte">Soporte Técnico</option>
                        <option value="ventas">Información de Ventas</option>
                        <option value="general">Consulta General</option>
                        <option value="sugerencia">Sugerencia</option>
                        <option value="problema">Reportar Problema</option>
                    </select>
                </div>
                
                <div>
                    <label for="mensaje" class="block text-sm font-medium text-gray-700 mb-2">
                        Mensaje <span class="text-red-500">*</span>
                    </label>
                    <textarea id="mensaje"
                              name="mensaje" 
                              rows="6"
                              class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                              placeholder="Describe tu consulta o mensaje aquí..."
                              required></textarea>
                </div>
                
                <div class="flex items-center">
                    <input type="checkbox" 
                           id="newsletter" 
                           name="newsletter" 
                           class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="newsletter" class="ml-2 block text-sm text-gray-700">
                        Suscribirme al newsletter para recibir actualizaciones
                    </label>
                </div>
                
                <button type="submit" 
                        class="w-full inline-flex justify-center items-center px-6 py-3 bg-blue-600 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                    <i class="fas fa-paper-plane mr-2"></i>
                    Enviar Mensaje
                </button>
            </form>
        </div>

        <!-- Contact Information -->
        <div class="space-y-6">
            <!-- Office Location -->
            <div class="bg-white rounded-lg shadow-md border border-gray-200 p-6">
                <div class="flex items-center mb-4">
                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                        <i class="fas fa-map-marker-alt text-blue-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900">Oficina Principal</h3>
                </div>
                <p class="text-gray-600">
                    Av. América 1233<br>
                    Trujillo, La Libertad<br>
                    Perú
                </p>
            </div>

            <!-- Contact Methods -->
            <div class="bg-white rounded-lg shadow-md border border-gray-200 p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Métodos de Contacto</h3>
                
                <div class="space-y-4">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center mr-3">
                            <i class="fas fa-phone text-green-600"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-500">Teléfono</p>
                            <p class="text-gray-900">+51 987 654 321</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center mr-3">
                            <i class="fas fa-envelope text-blue-600"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-500">Email</p>
                            <p class="text-gray-900">contacto@sistemagestion.com</p>
                        </div>
                    </div>
                    
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center mr-3">
                            <i class="fas fa-clock text-purple-600"></i>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-500">Horario de Atención</p>
                            <p class="text-gray-900">Lun - Vie: 9:00 AM - 6:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Social Media -->
            <div class="bg-white rounded-lg shadow-md border border-gray-200 p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Síguenos</h3>
                
                <div class="flex space-x-4">
                    <a href="#" class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center text-white hover:bg-blue-700 transition-colors duration-200">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-blue-400 rounded-lg flex items-center justify-center text-white hover:bg-blue-500 transition-colors duration-200">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-pink-600 rounded-lg flex items-center justify-center text-white hover:bg-pink-700 transition-colors duration-200">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-blue-800 rounded-lg flex items-center justify-center text-white hover:bg-blue-900 transition-colors duration-200">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>

            <!-- FAQ Quick Links -->
            <div class="bg-white rounded-lg shadow-md border border-gray-200 p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Preguntas Frecuentes</h3>
                
                <div class="space-y-3">
                    <a href="#" class="block text-blue-600 hover:text-blue-700 transition-colors duration-200">
                        <i class="fas fa-question-circle mr-2"></i>
                        ¿Cómo puedo crear un nuevo proyecto?
                    </a>
                    <a href="#" class="block text-blue-600 hover:text-blue-700 transition-colors duration-200">
                        <i class="fas fa-question-circle mr-2"></i>
                        ¿Cómo gestionar mis clientes?
                    </a>
                    <a href="#" class="block text-blue-600 hover:text-blue-700 transition-colors duration-200">
                        <i class="fas fa-question-circle mr-2"></i>
                        ¿Puedo exportar mis datos?
                    </a>
                    <a href="#" class="block text-blue-600 hover:text-blue-700 transition-colors duration-200">
                        <i class="fas fa-question-circle mr-2"></i>
                        ¿Hay soporte técnico disponible?
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Map Section -->
    <div class="bg-white rounded-lg shadow-md border border-gray-200 p-6">
        <h3 class="text-lg font-semibold text-gray-900 mb-4">Nuestra Ubicación</h3>
        <div class="h-64 bg-gray-200 rounded-lg flex items-center justify-center">
            <div class="text-center">
                <i class="fas fa-map text-gray-400 text-4xl mb-2"></i>
                <p class="text-gray-500">Mapa interactivo</p>
                <p class="text-sm text-gray-400">Av. Principal 123, Ciudad, Estado</p>
            </div>
        </div>
    </div>
</div>
@endsection
