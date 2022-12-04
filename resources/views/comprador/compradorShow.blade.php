<x-template titulo="Información del comprador">
    <x-table>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Comprador</th>
                <th scope="col">Usuario que lo creó</th>
                <th scope="col">Edad</th>
                <th scope="col">Mascota</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tr>
            <td>{{ $buyer->id }}</td>
            <td>
                {{ $buyer->Nombre }}
            </td>
            <td>{{ $buyer->user->name }}</td>
            <td>{{ $buyer->Edad }}</td>
            <td>{{ $buyer->Mascota }}</td>
            <td>
                @can('update', $buyer)
                    <x-link.edit url="/buyer/{{ $buyer->id }}/edit"></x-link.edit>
                @else
                    <p>Acción no permitida</p>
                @endcan
            </td>
            <td>
                @can('delete', $buyer)
                    <x-form.delete url="/buyer/{{ $buyer->id }}"></x-form.delete>
                @else
                    <p>Acción no permitida</p>
                @endcan
            </td>
        </tr>
        </td>
    </x-table>
</x-template>
