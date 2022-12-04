<x-template titulo='Crear Comprador'>


    <form action="/buyer" method="post" enctype="multipart/form-data" class="container">
        @csrf

        <div class="form-group">
            <label for="Nombre" class="form-label">Nombre:</label>
            <input class="form-control" type="text" name="Nombre" value="{{ old('Nombre') ?? '' }}" required>
            @error('Nombre')
                <i>Por favor escriba un nombre</i>
            @enderror
        </div>
        <div class="form-group">
            <label for="Mascota" class="form-label">Mascota:</label>
            <select name="Mascota" id="identified" class="form-select" required>
                <option selected disabled>Elegir animal</option>
                <option value="Perro" {{ old('Mascota') == 'Perro' ? 'selected' : '' }}>Perro</option>
                <option value="Gato" {{ old('Mascota') == 'Gato' ? 'selected' : '' }}>Gato</option>
                <option value="Pez" {{ old('Mascota') == 'Pez' ? 'selected' : '' }}>Pez</option>
                <option value="Otra" {{ old('Mascota') == 'Otra' ? 'selected' : '' }}>Otra</option>
            </select>
            @error('Mascota')
                <i>Por favor seleccione el tipo de mascota</i>
            @enderror
        </div>
        <div class="form-group">
            <label for="Edad" class="form-label">Edad:</label>
            <input class="form-control" type="number" name="Edad" value="{{ old('Edad') ?? '' }}" required>
            @error('Edad')
                <i>Por favor ingrese una edad mayor a 5 años</i>
            @enderror
        </div>
        <div class="text-center my-2"><input class="btn btn-success" type="submit" value="Registrar"></div>
    </form>
</x-template>
