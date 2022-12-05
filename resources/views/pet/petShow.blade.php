<x-template titulo="Registro de la mascota">
    <x-table>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Edad</th>
                <th scope="col">Genero</th>
                <th scope="col">Animal</th>
                <th scope="col">Usuario que lo creó</th>
                <th scope="col">Foto</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tr>
            <td>{{ $pet->id }}</td>
            <td>
                {{ $pet->Nombre }}
            </td>
            <td>{{ $pet->Edad }}</td>
            <td>{{ $pet->Genero }}</td>
            <td>{{ $pet->Animal }}</td>
            <td>{{ $pet->user->name }}</td>
            <td>
                @if (!empty($pet->archivos))
                    @foreach ($pet->archivos as $archivo)
                        <img src="{{ \Storage::url($archivo->ubicacion) }}" alt="" width="150rem">
                    @endforeach
                @else
                    <p>No hay ninguna foto</p>
                @endif
            </td>
            <td>
                @can('update', $pet)
                    <x-link.edit url="/pet/{{ $pet->id }}/edit"></x-link.edit>
                @else
                    <p>Acción no permitida</p>
                @endcan
            </td>
            <td>
                @can('delete', $pet)
                    <x-form.delete url="/pet/{{ $pet->id }}">
                    </x-form.delete>
                @else
                    <p>Acción no permitida</p>
                @endcan
            </td>

        </tr>
        </td>
    </x-table>
</x-template>
