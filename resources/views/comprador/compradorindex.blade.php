<x-template titulo='Listado de Compradores'>

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            Comprador
        </a>
        <ul class="navbar-nav ms-auto">
            <li>
                <a class="btn btn-outline-light" href="/buyer/create" role="button">Añadir Comprador</a>
                <a class="btn btn-outline-light" href="/menu" role="button">INICIO</a>
            </li>
        </ul>
    </nav>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Compradores</th>
                <th scope="col">Edad</th>
                <th scope="col">Mascota</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        @foreach ($buyers as $buyer)
            <tr>
                <td>{{ $buyer->id }}</td>
                <td>
                    <a href="/buyer/{{ $buyer->id }}">
                        {{ $buyer->Nombre }}
                    </a>
                </td>


                <td>{{ $buyer->Edad }}</td>
                <td>{{ $buyer->Mascota }}</td>
                <td><a href="/buyer/{{ $buyer->id }}/edit">Editar</a></td>


                <td>
                    <form action="/buyer/{{ $buyer->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="Submit" value="Eliminar">

                    </form>
                </td>
            </tr>
        @endforeach



        </td>

    </table>

</x-template>
