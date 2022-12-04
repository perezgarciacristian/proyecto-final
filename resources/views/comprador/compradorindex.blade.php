<x-template titulo='Listado de Compradores'>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            Comprador
        </a>
        <ul class="navbar-nav ms-auto">
            <li>
                <a class="btn btn-outline-light" href="/buyer/create" role="button">Añadir Comprador</a>
            </li>
        </ul>
    </nav>
    <x-table>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Comprador</th>
                <th scope="col">Edad</th>
                <th scope="col">Mascota</th>
                <th scope="col">Mostrar</th>
            </tr>
        </thead>
        @foreach ($buyers as $buyer)
            <tr>
                <td>{{ $buyer->id }}</td>
                <td>
                    {{ $buyer->Nombre }}
                </td>
                <td>{{ $buyer->Edad }}</td>
                <td>{{ $buyer->Mascota }}</td>
                <td>
                    <x-link.show url="/buyer/{{ $buyer->id }}"></x-link.show>
                </td>
            </tr>
        @endforeach
        </td>
    </x-table>
</x-template>
