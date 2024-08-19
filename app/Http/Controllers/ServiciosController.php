<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Servicio;
use App\Http\Requests\CreateServicioRequest;

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
    public function store(CreateServicioRequest $request)
    {
        //Eliminamos las reglas de validacion que estaban anteriormente ya que la validación ahora ocurrirá automaticamente
        Servicio::create($request->validated());

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
        return view('edit',[
            'tipo'=>'servicio',
            'resource'=>Servicio::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateServicioRequest $request, Servicio $servicio)
    {
        $servicio->update($request->validated());

        return redirect()->route('servicios.show',$servicio);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
