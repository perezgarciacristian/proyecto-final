<x-template titulo='Crear Comprador'>


    <form action="/buyer" method="post" enctype="multipart/form-data" class="container">
        @csrf

        <div class="form-group">
            <label for="Nombre" class="form-label">Nombre:</label>
            <input type="text" name="Nombre" value="{{ old('Nombre') ?? '' }}" required>
            @error('Nombre')
                <i>Por favor escriba un nombre</i>
            @enderror
        </div>

        <div class="form-group">
            <label>Edad:</label>
            <input class="form-check-input" type="radio" name="Edad" value="menor" required
                {{ old('Edad') == 'menor' ? 'checked' : '' }}>
            <label for=""> Menor</label>
            <input class="form-check-input" type="radio" name="Edad" value="adulto"
                {{ old('Edad') == 'adulto' ? 'checked' : '' }}>
            <label for="">Adulto</label>
            @error('Edad')
                <i>Por favor seleccione una edad</i>
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
        <div class="text-center my-2"><input class="btn btn-success" type="submit" value="Registrar"></div>
    </form>
</x-template>
