@csrf

@if($tipo === 'servicio' || $tipo === 'proyecto')
    <tr>
        <th>Título: </th>
        <td>
            <input type="text" name="titulo" value="{{ old('titulo',$resource->titulo) }}">
            <br>{{$errors->first('titulo')}}
        </td>
    </tr>
    <tr>
        <th>Descripción: </th>
        <td>
            <input type="text" name="descripcion" value="{{ old('descripcion',$resource->descripcion) }}">
            <br>{{$errors->first('descripcion')}}
        </td>
    </tr>
@elseif($tipo === 'cliente')
    <tr>
        <th>Nombres: </th>
        <td>
            <input type="text" name="nombres" value="{{ old('nombres',$resource->nombres) }}">
            <br>{{$errors->first('nombres')}}
        </td>
    </tr>
    <tr>
        <th>Apellidos: </th>
        <td>
            <input type="text" name="apellidos" value="{{ old('apellidos',$resource->apellidos) }}">
            <br>{{$errors->first('apellidos')}}
        </td>
    </tr>
    <tr>
        <th>Email: </th>
        <td>
            <input type="email" name="email" value="{{ old('email',$resource->email) }}">
            <br>{{$errors->first('email')}}
        </td>
    </tr>
    <tr>
        <th>Dirección: </th>
        <td>
            <input type="text" name="direccion" value="{{ old('direccion',$resource->direccion) }}">
            <br>{{$errors->first('direccion')}}
        </td>
    </tr>
    <tr>
        <th>Teléfono: </th>
        <td>
            <input type="text" name="telefono" value="{{ old('telefono',$resource->telefono) }}">
            <br>{{$errors->first('telefono')}}
        </td>
    </tr>
@endif

<tr>
    <td colspan="2" align="center">
        <button>{{$btnText}}</button>
    </td>
</tr>