<x-template titulo='Formulario Mascotas'>


    <form action="/pet" method="post" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="Nombre">Nombre:</label>
            <input type="text" name="Nombre" value="{{ old('Nombre') ?? '' }}" required>
        </div>

        <div>
            <label>Edad:</label>
            <label for="">Menor</label>
            <input type="radio" name="Edad" value="menor">
            <label for="">Adulto</label>
            <input type="radio" name="Edad" value="adulto" required>
        </div>
        <div>
            <label>Genero:</label>
            <label for="">M</label>
            <input name="Genero" type="radio" value="M">
            <label for="">F</label>
            <input name="Genero"type="radio" value="F" required>
        </div>

        <div>
            <label for="Animal">Animal:</label>
            <select name="Animal" id="identified">
                <option value="Perro">Perro</option>
                <option value="Gato">Gato</option>
                <option value="Pez">Pez</option>
                <option value="Otro">Otro</option>
            </select>
        </div>

        <div>
            <label for="">Usuario</label>
            <select name="user_id" id="user_id">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="">Comprador</label>
            <select name="comprador_id" id="user_id">
                @foreach ($buyers as $buyer)
                    <option value="{{ $buyer->id }}">{{ $buyer->Nombre }}</option>
                @endforeach

            </select>
        </div>
        <div>
            <label for="">Vendedor</label>
            <select name="seller_id" id="user_id">
                @foreach ($sellers as $seller)
                    <option value="{{ $seller->id }}">{{ $seller->Nombre }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="">Foto de la mascota</label>
            <input type="file" name="archivo">
        </div>

        <input type="submit" value="Registrar">

    </form>

</x-template>
