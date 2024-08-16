<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;

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
        $clientes=Cliente::latest('nombres')->paginate(2);

        return view('clientes',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
