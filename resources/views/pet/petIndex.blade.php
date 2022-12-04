<x-template titulo='Listado de Animales'>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            Mascotas
        </a>
        <ul class="navbar-nav ms-auto">
            <li>
                <a class="btn btn-outline-light" href="/pet/create" role="button">Añadir Mascota</a>
                <a class="btn btn-outline-light" href="/menu" role="button">INICIO</a>
            </li>
        </ul>
    </nav>

    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Edad</th>
                <th scope="col">Genero</th>
                <th scope="col">Animal</th>
                <th scope="col">Foto</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        @foreach ($pets as $pet)
            <tr>
                <td>{{ $pet->id }}</td>
                <td>
                    <a href="/pet/{{ $pet->id }}">
                        {{ $pet->Nombre }}
                    </a>
                </td>
                <td>{{ $pet->Edad }}</td>
                <td>{{ $pet->Genero }}</td>
                <td>{{ $pet->Animal }}</td>
                <td>
                    @if (!empty($pet->archivo))
                        <img src="{{ \Storage::url($pet->archivo->ubicacion) }}" alt="" width="200px">
                    @else
                        <p>No hay ninguna foto</p>
                    @endif
                </td>
                <td><a href="/pet/{{ $pet->id }}/edit">Editar</a></td>
                <td>
                    <form action="/pet/{{ $pet->id }}" method="POST">
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
