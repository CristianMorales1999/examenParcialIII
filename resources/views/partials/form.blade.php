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
        <!-- Foto -->
        <div>
            <label for="foto" class="block text-sm font-medium text-gray-700 mb-2">
                Foto del Cliente
            </label>
            
            @if(isset($resource) && $resource->foto)
                <div class="mb-4">
                    <div class="flex items-center space-x-4">
                        <img src="{{ $resource->foto_url }}" 
                             alt="Foto de {{ $resource->nombre_completo }}" 
                             class="w-20 h-20 rounded-full object-cover border-2 border-gray-200">
                        <div>
                            <p class="text-sm text-gray-600">Foto actual</p>
                            <p class="text-xs text-gray-500">Sube una nueva imagen para reemplazarla</p>
                        </div>
                    </div>
                </div>
            @endif
            
            <div class="flex items-center justify-center w-full">
                <label for="foto" class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 @error('foto') border-red-300 @enderror">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <i class="fas fa-cloud-upload-alt text-gray-400 text-3xl mb-2"></i>
                        <p class="mb-2 text-sm text-gray-500">
                            <span class="font-semibold">Haz clic para subir</span> o arrastra y suelta
                        </p>
                        <p class="text-xs text-gray-500">PNG, JPG, GIF, WEBP hasta 2MB</p>
                    </div>
                    <input id="foto" 
                           name="foto" 
                           type="file" 
                           class="hidden" 
                           accept="image/jpeg,image/png,image/jpg,image/gif,image/webp"
                           onchange="previewImage(this)">
                </label>
            </div>
            
            @error('foto')
                <div class="mt-2 p-3 bg-red-50 border border-red-200 rounded-md">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <i class="fas fa-exclamation-triangle text-red-400"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-red-700">{{ $message }}</p>
                        </div>
                    </div>
                </div>
            @enderror
            
            <!-- Image Preview -->
            <div id="imagePreview" class="mt-4 hidden">
                <img id="preview" src="" alt="Vista previa" class="w-32 h-32 rounded-lg object-cover border border-gray-200">
            </div>
        </div>

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

<script>
function previewImage(input) {
    const preview = document.getElementById('preview');
    const previewContainer = document.getElementById('imagePreview');
    
    if (input.files && input.files[0]) {
        const file = input.files[0];
        
        // Validate file type
        const validTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif', 'image/webp'];
        if (!validTypes.includes(file.type)) {
            alert('Por favor selecciona una imagen válida (JPEG, PNG, JPG, GIF, WEBP)');
            input.value = '';
            previewContainer.classList.add('hidden');
            return;
        }
        
        // Validate file size (2MB = 2 * 1024 * 1024 bytes)
        if (file.size > 2 * 1024 * 1024) {
            alert('La imagen no puede ser mayor a 2MB');
            input.value = '';
            previewContainer.classList.add('hidden');
            return;
        }
        
        const reader = new FileReader();
        
        reader.onload = function(e) {
            preview.src = e.target.result;
            previewContainer.classList.remove('hidden');
        }
        
        reader.readAsDataURL(file);
    } else {
        previewContainer.classList.add('hidden');
    }
}
</script>