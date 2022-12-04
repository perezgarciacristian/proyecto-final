<x-template titulo='Listado de Vacunas'>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            Vacunas
        </a>
        <ul class="navbar-nav ms-auto">
            <li>
                <a class="btn btn-outline-light" href="/vaccine/create" role="button">Añadir Vacuna</a>
            </li>
        </ul>
    </nav>
    <x-table>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tipo</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Componentes</th>
            <th scope="col">Mostrar</th>
        </tr>

        @foreach ($vaccines as $vaccine)
            <tr>
                <td>{{ $vaccine->id }}</td>
                <td>
                    {{ $vaccine->Tipo }}
                </td>
                <td>{{ $vaccine->Descripcion }}</td>
                <td>{{ $vaccine->Componentes }}</td>
                <td>
                    <x-link.show url="/vaccine/{{ $vaccine->id }}">
                        </x-link.shoe>
                </td>
            </tr>
        @endforeach

        </td>

    </x-table>
</x-template>
