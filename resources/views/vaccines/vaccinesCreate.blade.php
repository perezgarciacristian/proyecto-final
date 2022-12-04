<x-template titulo='Formulario Vacunas'>
    <form action="/vaccine" method="post" class="container">
        @csrf
        <div class="form-group">
            <label class="form-label" for="Tipo">Tipo:</label>
            <select class="form-select" name="Tipo" id="identified" required>
                <option selected disabled value="">Elegir tipo de vacuna</option>
                <option value="Vacuna Viva" {{ old('Tipo') == 'Vacuna Viva' ? 'selected' : '' }}>Vacuna Viva</option>
                <option value="Vacuna Muerta" {{ old('Tipo') == 'Vacuna Muerta' ? 'selected' : '' }}>Vacuna Muerta
                </option>
                <option value="Vacuna diseño" {{ old('Tipo') == 'Vacuna diseño' ? 'selected' : '' }}>Vacuna Diseño
                </option>
                <option value="Otra" {{ old('Tipo') == 'Otra' ? 'selected' : '' }}>Otra</option>
            </select>
            @error('Tipo')
                <i>Por favor seleccione un tipo de vacuna</i>
            @enderror
        </div>

        <div class="form-group">
            <label class="form-label" for="Descripcion">Descripcion:</label>
            <textarea class="form-control" name="Descripcion" id="identified" rows="no_renglones" cols="no_columnas" required>{{ old('Descripcion') ?? '' }}</textarea>
            @error('Descripcion')
                <i>Por favor ingrese una Descripcion</i>
            @enderror
        </div>

        <div class="form-group">
            <label class="form-label" for="Componentes">Componentes:</label>
            <select class="form-select" name="Componentes" id="identified" required>
                <option selected disabled value="">Componente de la vacuna</option>
                <option value="Antigenos" {{ old('Componentes') == 'Antigenos' ? 'selected' : '' }}>Antigenos</option>
                <option value="Adyuvantes" {{ old('Componentes') == 'Adyuvantes' ? 'selected' : '' }}>Adyuvantes
                </option>
                <option value="Inactivadores" {{ old('Componentes') == 'Inactivadores' ? 'selected' : '' }}>
                    Inactivadores</option>
                <option value="Conservantes" {{ old('Componentes') == 'Conservantes' ? 'selected' : '' }}>Conservantes
                </option>
                <option value="Excipientes" {{ old('Componentes') == 'Excipientes' ? 'selected' : '' }}>Excipientes
                </option>
            </select>
            @error('Componentes')
                <i>Por favor seleccione un componente</i>
            @enderror
        </div>
        <div class="text-center my-2"><input class="btn btn-success" type="submit" value="Registrar"></div>


    </form>

</x-template>
