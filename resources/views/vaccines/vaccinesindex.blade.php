<x-template titulo='Listado de Vacunas'>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            Vacunas
        </a>
        <ul class="navbar-nav ms-auto">
            <li>
                <a class="btn btn-outline-light" href="/vaccine/create" role="button">Añadir Vacuna</a>
                <a class="btn btn-outline-light" href="/menu" role="button">INICIO</a>
            </li>
        </ul>
    </nav>
    <table class="table table-striped table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tipo</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Componentes</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>

        @foreach ($vaccines as $vaccines)
            <tr>
                <td>{{ $vaccines->id }}</td>

                <td>
                    <a href="/vaccines/{{ $vaccines->id }}">
                        {{ $vaccines->Tipo }}
                    </a>
                </td>


                <td>{{ $vaccines->Descripcion }}</td>
                <td>{{ $vaccines->Componentes }}</td>
                <td><a href="/vaccine/{{ $vaccines->id }}/edit">Editar</a></td>


                <td>
                    <form action="/vaccine/{{ $vaccines->id }}" method="POST">
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
