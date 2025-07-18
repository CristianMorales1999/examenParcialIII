@csrf

<div class="space-y-6">
    @if($tipo === 'servicio' || $tipo === 'proyecto')
        <!-- Título -->
        <div>
            <label for="titulo" class="block text-sm font-medium text-gray-700 mb-2">
                Título <span class="text-red-500">*</span>
            </label>
            <input type="text" 
                   id="titulo"
                   name="titulo" 
                   value="{{ old('titulo', $resource->titulo ?? '') }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('titulo') border-red-300 focus:ring-red-500 focus:border-red-500 @enderror"
                   placeholder="Ingresa el título del {{ $tipo }}"
                   required>
            @error('titulo')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Descripción -->
        <div>
            <label for="descripcion" class="block text-sm font-medium text-gray-700 mb-2">
                Descripción <span class="text-red-500">*</span>
            </label>
            <textarea id="descripcion"
                      name="descripcion" 
                      rows="4"
                      class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('descripcion') border-red-300 focus:ring-red-500 focus:border-red-500 @enderror"
                      placeholder="Describe el {{ $tipo }}"
                      required>{{ old('descripcion', $resource->descripcion ?? '') }}</textarea>
            @error('descripcion')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

    @elseif($tipo === 'cliente')
        <!-- Nombres -->
        <div>
            <label for="nombres" class="block text-sm font-medium text-gray-700 mb-2">
                Nombres <span class="text-red-500">*</span>
            </label>
            <input type="text" 
                   id="nombres"
                   name="nombres" 
                   value="{{ old('nombres', $resource->nombres ?? '') }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 @error('nombres') border-red-300 focus:ring-red-500 focus:border-red-500 @enderror"
                   placeholder="Ingresa los nombres del cliente"
                   required>
            @error('nombres')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Apellidos -->
        <div>
            <label for="apellidos" class="block text-sm font-medium text-gray-700 mb-2">
                Apellidos <span class="text-red-500">*</span>
            </label>
            <input type="text" 
                   id="apellidos"
                   name="apellidos" 
                   value="{{ old('apellidos', $resource->apellidos ?? '') }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 @error('apellidos') border-red-300 focus:ring-red-500 focus:border-red-500 @enderror"
                   placeholder="Ingresa los apellidos del cliente"
                   required>
            @error('apellidos')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                Email <span class="text-red-500">*</span>
            </label>
            <input type="email" 
                   id="email"
                   name="email" 
                   value="{{ old('email', $resource->email ?? '') }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 @error('email') border-red-300 focus:ring-red-500 focus:border-red-500 @enderror"
                   placeholder="ejemplo@correo.com"
                   required>
            @error('email')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Dirección -->
        <div>
            <label for="direccion" class="block text-sm font-medium text-gray-700 mb-2">
                Dirección
            </label>
            <input type="text" 
                   id="direccion"
                   name="direccion" 
                   value="{{ old('direccion', $resource->direccion ?? '') }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 @error('direccion') border-red-300 focus:ring-red-500 focus:border-red-500 @enderror"
                   placeholder="Ingresa la dirección del cliente">
            @error('direccion')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Teléfono -->
        <div>
            <label for="telefono" class="block text-sm font-medium text-gray-700 mb-2">
                Teléfono
            </label>
            <input type="text" 
                   id="telefono"
                   name="telefono" 
                   value="{{ old('telefono', $resource->telefono ?? '') }}"
                   class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-purple-500 @error('telefono') border-red-300 focus:ring-red-500 focus:border-red-500 @enderror"
                   placeholder="Ingresa el número de teléfono">
            @error('telefono')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>
    @endif

    <!-- Submit Button -->
    <div class="flex items-center justify-end space-x-3 pt-6 border-t border-gray-200">
        <a href="{{ url()->previous() }}" 
           class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors duration-200">
            <i class="fas fa-arrow-left mr-2"></i>
            Cancelar
        </a>
        <button type="submit" 
                class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white 
                       @if($tipo === 'servicio' || $tipo === 'proyecto') bg-blue-600 hover:bg-blue-700 focus:ring-blue-500 @else bg-purple-600 hover:bg-purple-700 focus:ring-purple-500 @endif
                       focus:outline-none focus:ring-2 focus:ring-offset-2 disabled:opacity-50 transition-colors duration-200">
            <i class="fas fa-save mr-2"></i>
            {{ $btnText }}
        </button>
    </div>
</div>