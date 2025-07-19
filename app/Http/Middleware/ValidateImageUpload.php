<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;

class ValidateImageUpload
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Solo validar en rutas de clientes
        if ($request->is('clientes*') && $request->hasFile('foto')) {
            $file = $request->file('foto');
            
            // Log para debugging
            Log::info('Validating image upload', [
                'original_name' => $file->getClientOriginalName(),
                'mime_type' => $file->getMimeType(),
                'size' => $file->getSize(),
                'extension' => $file->getClientOriginalExtension(),
                'is_valid' => $file->isValid()
            ]);
            
            // Validar que el archivo sea válido
            if (!$file->isValid()) {
                Log::error('Invalid file upload', [
                    'error' => $file->getError(),
                    'original_name' => $file->getClientOriginalName()
                ]);
                
                return back()->withErrors([
                    'foto' => 'El archivo no se pudo subir correctamente. Error: ' . $file->getError()
                ]);
            }
            
            // Validar tipo MIME
            $allowedMimes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif', 'image/webp'];
            if (!in_array($file->getMimeType(), $allowedMimes)) {
                Log::error('Invalid MIME type', [
                    'mime_type' => $file->getMimeType(),
                    'original_name' => $file->getClientOriginalName()
                ]);
                
                return back()->withErrors([
                    'foto' => 'El archivo debe ser una imagen válida (JPEG, PNG, JPG, GIF, WEBP). Tipo detectado: ' . $file->getMimeType()
                ]);
            }
            
            // Validar tamaño (2MB)
            if ($file->getSize() > 2 * 1024 * 1024) {
                Log::error('File too large', [
                    'size' => $file->getSize(),
                    'original_name' => $file->getClientOriginalName()
                ]);
                
                return back()->withErrors([
                    'foto' => 'La imagen no puede ser mayor a 2MB. Tamaño actual: ' . round($file->getSize() / 1024 / 1024, 2) . 'MB'
                ]);
            }
        }
        
        return $next($request);
    }
}
