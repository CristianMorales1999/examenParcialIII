@if ($paginator->hasPages())
    <div class="mt-8 space-y-4">
        <!-- Estadísticas -->
        <div class="bg-white px-4 py-3 flex items-center justify-between border border-gray-200 sm:px-6 rounded-lg shadow-sm">
            <div class="flex-1 flex justify-between sm:hidden">
                <div class="text-sm text-gray-700">
                    <span class="font-medium">{{ $paginator->firstItem() }}</span>
                    a 
                    <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    de 
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    resultados
                </div>
            </div>
            
            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm text-gray-700">
                        Mostrando 
                        <span class="font-medium">{{ $paginator->firstItem() }}</span>
                        a 
                        <span class="font-medium">{{ $paginator->lastItem() }}</span>
                        de 
                        <span class="font-medium">{{ $paginator->total() }}</span>
                        resultados
                        @if($paginator->hasPages())
                            <span class="text-gray-500">(Página {{ $paginator->currentPage() }} de {{ $paginator->lastPage() }})</span>
                        @endif
                    </p>
                </div>
            </div>
        </div>

        <!-- Navegación -->
        <div class="bg-white px-4 py-3 flex items-center justify-center border border-gray-200 sm:px-6 rounded-lg shadow-sm">
            <!-- Navegación móvil -->
            <div class="flex-1 flex justify-between sm:hidden">
                @if ($paginator->onFirstPage())
                    <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-300 bg-gray-50 cursor-not-allowed">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Anterior
                    </span>
                @else
                    <a href="{{ $paginator->previousPageUrl() }}" 
                       class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 transition-colors duration-200">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Anterior
                    </a>
                @endif

                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}" 
                       class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 transition-colors duration-200">
                        Siguiente
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                @else
                    <span class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-300 bg-gray-50 cursor-not-allowed">
                        Siguiente
                        <i class="fas fa-arrow-right ml-2"></i>
                    </span>
                @endif
            </div>

            <!-- Navegación desktop -->
            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-center">
                <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                    {{-- Botón Anterior --}}
                    @if ($paginator->onFirstPage())
                        <span class="relative inline-flex items-center px-3 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-300 cursor-not-allowed">
                            <i class="fas fa-chevron-left"></i>
                        </span>
                    @else
                        <a href="{{ $paginator->previousPageUrl() }}" 
                           class="relative inline-flex items-center px-3 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-700 transition-colors duration-200">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                    @endif

                    {{-- Números de página --}}
                    @php
                        $start = max(1, $paginator->currentPage() - 2);
                        $end = min($paginator->lastPage(), $paginator->currentPage() + 2);
                    @endphp

                    {{-- Primera página si no está en el rango --}}
                    @if ($start > 1)
                        <a href="{{ $paginator->url(1) }}" 
                           class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900 transition-colors duration-200">
                            1
                        </a>
                        @if ($start > 2)
                            <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">
                                ...
                            </span>
                        @endif
                    @endif

                    {{-- Páginas en el rango --}}
                    @for ($page = $start; $page <= $end; $page++)
                        @if ($page == $paginator->currentPage())
                            <span class="relative inline-flex items-center px-4 py-2 border border-blue-500 bg-blue-50 text-sm font-medium text-blue-600">
                                {{ $page }}
                            </span>
                        @else
                            <a href="{{ $paginator->url($page) }}" 
                               class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900 transition-colors duration-200">
                                {{ $page }}
                            </a>
                        @endif
                    @endfor

                    {{-- Última página si no está en el rango --}}
                    @if ($end < $paginator->lastPage())
                        @if ($end < $paginator->lastPage() - 1)
                            <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">
                                ...
                            </span>
                        @endif
                        <a href="{{ $paginator->url($paginator->lastPage()) }}" 
                           class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 hover:text-gray-900 transition-colors duration-200">
                            {{ $paginator->lastPage() }}
                        </a>
                    @endif

                    {{-- Botón Siguiente --}}
                    @if ($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}" 
                           class="relative inline-flex items-center px-3 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-700 transition-colors duration-200">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    @else
                        <span class="relative inline-flex items-center px-3 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-300 cursor-not-allowed">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    @endif
                </nav>
            </div>
        </div>
    </div>
@endif 