<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Servicio;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$servicios=DB::table('servicios')->get();//Cuando aun no se crea el modelo
        //$servicios=Servicio::get();//Cuando ya se crea el modelo

        //Metodo latest ordena la tabla en forma descendente por un determinado campo.
        //$servicios=Servicio::latest('titulo')->get();

        //Metodo orderBy ordena la tabla en una determinada forma por un determinado campo.
        //$servicios=Servicio::orderBy('titulo','asc')->get();
        
        //Metodo paginate divide en paginas una determinada cantidad de elementos que se deben mostrar.
        $servicios=Servicio::latest('titulo')->paginate(2);

        return view('servicios',compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipo = 'servicio';
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

        //Almacenamos en la BD usando el modelo Servicio
        Servicio::create(['titulo'=>$titulo,'descripcion'=>$descripcion]);*/

        /*//Opcion 2 de Insercion (En el caso de tener los mismo nombres de campo que tenemos en el formulario)
        Servicio::create(request()->all());*/

        //Opcion 03: Validando campos
        $camposv=request()->validate(
            [
                'titulo'=>'required',
                'descripcion'=>'required'
            ]
        );
        //Almacenamos en la BD usando el modelo Servicio
        Servicio::create($camposv);

        return redirect()->route('servicios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Busca en la tabla y retorna la informacion requerida
        //return Servicio::find($id);
        return view('show',[
            'type'=>'servicio',
            'resource'=>Servicio::find($id)
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
