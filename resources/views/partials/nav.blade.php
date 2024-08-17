
<thead class="table table-bordered">
    <tr>
        <th scope="col" class="{{ setActivo('home')}}"><a href="{{ route('home') }}">Home</a></th>
        <th scope="col" class="{{ setActivo('servicios.index') }} {{ setActivo('servicios.show') }} {{ setActivo('servicios.create') }}"><a href="{{ route('servicios.index') }}">Servicios</a></th>
        <th scope="col" class="{{ setActivo('proyectos.index') }} {{ setActivo('proyectos.show') }} {{ setActivo('proyectos.create') }}"><a href="{{ route('proyectos.index') }}">Proyectos</a></th>
        <th scope="col" class="{{ setActivo('clientes.index') }} {{ setActivo('clientes.show') }} {{ setActivo('clientes.create') }}"><a href="{{ route('clientes.index') }}">Clientes</a></th>
        <th scope="col" class="{{ setActivo('blog')}}"><a href="{{ route('blog') }}">Blog</a></th>
        <th scope="col" class="{{ setActivo('contacto')}}"><a href="{{ route('contacto') }}">Contacto</a></th>
    </tr>
    <tr>
        <td colspan="6">
            <!-- Agregamos la directiva para agregar contenido dinamico-->
            @yield('content')
        </td>
    </tr>
</thead>
