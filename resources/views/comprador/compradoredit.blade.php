<x-template titulo="Editar comprador">

    <form action="/buyer/{{ $buyer->id }}" method="post" class="container">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="Nombre" class="form-label">Nombre:</label>
            <input type="text" name="Nombre" value="{{ $buyer->Nombre }}" class="form-control" required>
            @error('Nombre')
                <i>Por favor escriba un nombre</i>
            @enderror
        </div>
        <br>
        <div class="form-group">
            <label for="Edad" class="form-label">Edad:</label>
            <input class="form-control" type="number" name="Edad" value="{{ $buyer->Edad ?? '' }}" required>
            @error('Edad')
                <i>Por favor ingrese una edad mayor a 5 años</i>
            @enderror

        </div>
        <br>
        <div class="form-group">
            <label for="Mascota" class="form-label">Mascota:</label>
            <select name="Mascota" id="identified" class="form-select" required>
                <option selected disabled>Elegir animal</option>
                <option value="Perro" {{ $buyer->Mascota == 'Perro' ? 'selected' : '' }}>Perro
                </option>
                <option value="Gato" {{ $buyer->Mascota == 'Gato' ? 'selected' : '' }}>Gato
                </option>
                <option value="Pez" {{ $buyer->Mascota == 'Pez' ? 'selected' : '' }}>Pez</option>
                <option value="Otra" {{ $buyer->Mascota == 'Otra' ? 'selected' : '' }}>Otra</option>
            </select>
            @error('Mascota')
                <i>Por favor seleccione el tipo de mascota</i>
            @enderror
        </div>
        <div class="text-center my-2"><input class="btn btn-success" type="submit" value="Registrar"></div>
    </form>
</x-template>
