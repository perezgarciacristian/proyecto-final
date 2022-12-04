<x-template titulo='Listado de Animales'>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            Mascotas
        </a>
        <ul class="navbar-nav ms-auto">
            <li>
                <a class="btn btn-outline-light" href="/pet/create" role="button">Añadir Mascota</a>
            </li>
        </ul>
    </nav>

    <x-table>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Edad</th>
                <th scope="col">Genero</th>
                <th scope="col">Animal</th>
                <th scope="col">Mostrar</th>
            </tr>
        </thead>
        @foreach ($pets as $pet)
            <tr>
                <td>{{ $pet->id }}</td>
                <td>
                    {{ $pet->Nombre }}
                </td>
                <td>{{ $pet->Edad }}</td>
                <td>{{ $pet->Genero }}</td>
                <td>{{ $pet->Animal }}</td>
                <td>
                    <x-link.show url="/pet/{{ $pet->id }}"></x-link.show>
                </td>
            </tr>
        @endforeach



        </td>
    </x-table>
</x-template>
