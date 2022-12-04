<x-template titulo="Información sobre la vacuna">

    <x-table>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Tipo</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Componentes</th>
            <th scope="col">Usuario que lo creó</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
        <tr>
            <td>{{ $vaccine->id }}</td>
            <td>
                {{ $vaccine->Tipo }}
            </td>
            <td>{{ $vaccine->Descripcion }}</td>
            <td>{{ $vaccine->Componentes }}</td>
            <td>{{ $vaccine->user->name }}</td>
            <td>
                @can('update', $vaccine)
                    <x-link.edit url="/vaccine/{{ $vaccine->id }}/edit">Editar</x-link.edit>
                @else
                    <p>Acción no permitida</p>
                @endcan
            </td>
            <td>
                @can('delete', $vaccine)
                    <x-form.delete url="/vaccine/{{ $vaccine->id }}"></x-form.delete>
                @else
                    <p>Acción no permitida</p>
                @endcan

            </td>
        </tr>

        </td>

    </x-table>
</x-template>
