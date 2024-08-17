<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Proyecto;

class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$proyectos=DB::table('proyectos')->get();//Cuando aun no se crea el modelo
        //$proyectos=Proyecto::get();//Cuando ya se crea el modelo

        //Metodo latest ordena la tabla en forma descendente por un determinado campo.
        //$proyectos=Proyecto::latest('titulo')->get();

        //Metodo orderBy ordena la tabla en una determinada forma por un determinado campo.
        //$proyectos=Proyecto::orderBy('titulo','asc')->get();
        
        //Metodo paginate divide en paginas una determinada cantidad de elementos que se deben mostrar.
        $proyectos=Proyecto::latest('titulo')->paginate(2);

        return view('proyectos',compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipo = 'proyecto';
        return view('create', compact('tipo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*//Opcion 01 de Insercion
        
        //Recogemos las variables
        $titulo=request('titulo');
        $descripcion=request('descripcion');

        //Almacenamos en la BD usando el modelo Proyecto
        Proyecto::create(['titulo'=>$titulo,'descripcion'=>$descripcion]);*/

        /*//Opcion 2 de Insercion (En el caso de tener los mismo nombres de campo que tenemos en el formulario)
        Proyecto::create(request()->all());*/

        //Opcion 03: Validando campos
        $camposv=request()->validate(
            [
                'titulo'=>'required',
                'descripcion'=>'required'
            ]
        );
        //Almacenamos en la BD usando el modelo Servicio
        Proyecto::create($camposv);

        return redirect()->route('proyectos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Busca en la tabla y retorna la informacion requerida
        //return Proyecto::find($id);
        return view('show',[
            'type'=>'proyecto',
            'resource'=>Proyecto::find($id)
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
