<x-template titulo="Editar mascota">
    <form action="/pet/{{ $pet->id }}" method="POST" enctype="multipart/form-data" class="container">
        @csrf
        @method('patch')
        <div class="form-group">
            <label class="form-label" for="Nombre">Nombre:</label>
            <input class="form-control" type="text" name="Nombre" value="{{ $pet->Nombre }}">
        </div>
        <div class="form-group">
            <label class="form-label" for="">Edad:</label>
            <label class="form-label" for="">Menor</label>
            @if ($pet->Edad == 'menor')
                <input class="form-check-input" type="radio" name="Edad" value="menor" checked>
            @else
                <input class="form-check-input" type="radio" name="Edad" value="menor">
            @endif
            <label class="form-label" for="">Adulto</label>
            @if ($pet->Edad == 'adulto')
                <input class="form-check-input" type="radio" name="Edad" value="adulto" checked>
            @else
                <input class="form-check-input" type="radio" name="Edad" value="adulto">
            @endif
        </div>
        <div class="form-group">
            <label class="form-label" for="">Género:</label>
            <label class="form-label" for="">M</label>
            @if ($pet->Genero == 'M')
                <input class="form-check-input" name="Genero" type="radio" value="M" checked>
            @else
                <input class="form-check-input" name="Genero" type="radio" value="M">
            @endif

            <label class="form-label" for="">F</label>
            @if ($pet->Genero == 'F')
                <input class="form-check-input" name="Genero"type="radio" value="F" checked>
            @else
                <input class="form-check-input" name="Genero"type="radio" value="F">
            @endif

        </div>
        <div class="form-group">
            <label class="form-label" for="Animal">Animal:</label>
            <select class="form-select" name="Animal" id="identified">
                @if ($pet->Animal == 'Perro')
                    <option value="Perro" selected>Perro</option>
                @else
                    <option value="Perro">Perro</option>
                @endif
                @if ($pet->Animal == 'Gato')
                    <option value="Gato" selected>Gato</option>
                @else
                    <option value="Gato">Gato</option>
                @endif
                @if ($pet->Animal == 'Pez')
                    <option value="Pez" selected>Pez</option>
                @else
                    <option value="Pez">Pez</option>
                @endif
                @if ($pet->Animal == 'Otro')
                    <option value="Otro" selected>Otro</option>
                @else
                    <option value="Otro">Otro</option>
                @endif
            </select>
        </div>
        <div class="form-group"><label class="form-label" for="">Subir nuevos archivos</label>
            <input class="form-control" type="file" name="archivo[]" multiple>
        </div>
        <div class="text-center my-2"><input class="btn btn-success" type="submit" value="Editar"></div>
    </form>
    <div class="form-group">
        <x-table>
            <caption>Imagen Mascota. Campo no obligatorio</caption>
            <tr>
                <th class="text-center">
                    imagen
                </th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            @if (!empty($pet->archivos))
                @foreach ($pet->archivos as $archivo)
                    <tr>
                        <td>
                            <img src="{{ \Storage::url($archivo->ubicacion) }}" alt="" width="200em">
                        </td>
                        <td width="50%">
                            <div>
                                <form action="/pet/imagen/update/{{ $archivo->id }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <label class="form-label" for="">Editar</label>
                                    <br>
                                    <input class="form-control" type="file" name="archivo"><br>
                                    <input class="btn btn-info" type="submit" value="Actualizar">
                                    <input type="hidden" name="pet_id" value="{{ $pet->id }}">
                                </form>
                            </div>
                        </td>
                        <td>
                            <a href="/pet/imagen/eliminar/{{ $archivo->id }}">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </x-table>

    </div>
</x-template>
