<x-template titulo="Editar comprador">

    <form action="/buyer/{{ $buyer->id }}" method="post" class="container">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="Nombre" class="form-label">Nombre:</label>
            <input type="text" name="Nombre" value="{{ $buyer->Nombre }}" required>
            @error('Nombre')
                <i>Por favor escriba un nombre</i>
            @enderror
        </div>

        <div class="form-group">
            <label>Edad:</label>
            <input class="form-check-input" type="radio" name="Edad" value="menor" required
                {{ $buyer->Edad == 'menor' ? 'checked' : '' }}>
            <label for=""> Menor</label>
            <input class="form-check-input" type="radio" name="Edad" value="adulto"
                {{ $buyer->Edad == 'adulto' ? 'checked' : '' }}>
            <label for="">Adulto</label>
            @error('Edad')
                <i>Por favor seleccione una edad</i>
            @enderror
        </div>
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
