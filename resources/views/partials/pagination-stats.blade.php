@if($paginator->hasPages())
    <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6 rounded-lg shadow-sm">
        <!-- Estadísticas de registros -->
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
@endif 