<x-template titulo='Formulario Comprador'>


    <form action="/buyer" method="post" enctype="multipart/form-data" class="container">
        @csrf

        <div class="form-group">
            <label for="Nombre" class="form-label">Nombre:</label>
            <input type="text" name="Nombre">
        </div>

        <div class="form-group">
            <p>Edad:
                <input type="radio" name="Edad" value="menor"> Menor
                <input type="radio" name="Edad" value="adulto" required> Adulto
            </p>
        </div>


        <div class="form-group">
            <label for="Mascota" class="form-label">Mascota:</label>
            <select name="Mascota" id="identified" class="form-select">
                <option value="Perro">Perro</option>
                <option value="Gato">Gato</option>
                <option value="Pez">Pez</option>
                <option value="Otra">Otra</option>
            </select>
        </div>

        <select name="user_id" id="user_id" class="form-select">
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach

        </select>


        <div class="text-center my-2"><input class="btn btn-success" type="submit" value="Registrar"></div>

    </form>
</x-template>

