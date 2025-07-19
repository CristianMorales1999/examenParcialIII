<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use App\Models\Cliente;
use App\Http\Requests\CreateClienteRequest;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$clientes=DB::table('clientes')->get();//Cuando aun no se crea el modelo
        //$clientes=Cliente::get();//Cuando ya se crea el modelo

        //Metodo latest ordena la tabla en forma descendente por un determinado campo.
        //$clientes=Cliente::latest('titulo')->get();

        //Metodo orderBy ordena la tabla en una determinada forma por un determinado campo.
        //$clientes=Cliente::orderBy('titulo','asc')->get();
        
        //Metodo paginate divide en paginas una determinada cantidad de elementos que se deben mostrar.
        $clientes=Cliente::latest('nombres')->paginate(9);

        return view('clientes',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$tipo = 'cliente';
        //return view('create', compact('tipo'));
        return view('create',[
            'tipo'=>'cliente',
            'resource'=> new Cliente
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateClienteRequest $request)
    {
        try {
            $data = $request->validated();
            
            // Handle photo upload
            if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
                $foto = $request->file('foto');
                
                // Log file information for debugging
                Log::info('Uploading photo', [
                    'original_name' => $foto->getClientOriginalName(),
                    'mime_type' => $foto->getMimeType(),
                    'size' => $foto->getSize(),
                    'extension' => $foto->getClientOriginalExtension()
                ]);
                
                $fotoPath = $foto->store('clientes', 'public');
                $data['foto'] = $fotoPath;
                
                Log::info('Photo stored successfully', ['path' => $fotoPath]);
            }

            Cliente::create($data);

            return redirect()->route('clientes.index')->with('success', 'Cliente creado exitosamente');
        } catch (\Exception $e) {
            Log::error('Error creating client', [
                'error' => $e->getMessage(),
                'data' => $request->except(['foto'])
            ]);
            
            return back()->withErrors(['error' => 'Error al crear el cliente: ' . $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Busca en la tabla y retorna la informacion requerida
        //return Cliente::find($id);
        return view('show',[
            'type'=>'cliente',
            'resource'=>Cliente::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('edit',[
            'tipo'=>'cliente',
            'resource'=>Cliente::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateClienteRequest $request, Cliente $cliente)
    {
        try {
            $data = $request->validated();
            
            // Handle photo upload
            if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
                $foto = $request->file('foto');
                
                // Log file information for debugging
                Log::info('Updating photo', [
                    'original_name' => $foto->getClientOriginalName(),
                    'mime_type' => $foto->getMimeType(),
                    'size' => $foto->getSize(),
                    'extension' => $foto->getClientOriginalExtension()
                ]);
                
                // Delete old photo if exists
                if ($cliente->foto) {
                    Storage::disk('public')->delete($cliente->foto);
                    Log::info('Old photo deleted', ['path' => $cliente->foto]);
                }
                
                $fotoPath = $foto->store('clientes', 'public');
                $data['foto'] = $fotoPath;
                
                Log::info('New photo stored successfully', ['path' => $fotoPath]);
            }

            $cliente->update($data);

            return redirect()->route('clientes.show',$cliente)->with('success', 'Cliente actualizado exitosamente');
        } catch (\Exception $e) {
            Log::error('Error updating client', [
                'error' => $e->getMessage(),
                'client_id' => $cliente->id,
                'data' => $request->except(['foto'])
            ]);
            
            return back()->withErrors(['error' => 'Error al actualizar el cliente: ' . $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        try {
            // Delete photo if exists
            if ($cliente->foto) {
                Storage::disk('public')->delete($cliente->foto);
                Log::info('Client photo deleted', ['path' => $cliente->foto]);
            }
            
            $cliente->delete();
            return redirect()->route('clientes.index')->with('success', 'Cliente eliminado exitosamente');
        } catch (\Exception $e) {
            Log::error('Error deleting client', [
                'error' => $e->getMessage(),
                'client_id' => $cliente->id
            ]);
            
            return back()->withErrors(['error' => 'Error al eliminar el cliente: ' . $e->getMessage()]);
        }
    }
}
