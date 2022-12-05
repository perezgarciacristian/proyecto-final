<x-template titulo='Formulario Mascotas'>
    <form action="/pet" method="post" enctype="multipart/form-data" class="container">
        @csrf
        <div class="form-group">
            <label for="Nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="Nombre" value="{{ old('Nombre') ?? '' }}" required>
        </div>

        <div class="form-group">
            <label class="form-label">Edad:</label>
            <input class="form-check-input" type="radio" name="Edad" value="menor">
            <label class="form-label" for="">Menor</label>
            <input class="form-check-input" type="radio" name="Edad" value="adulto" required>
            <label class="form-label" for="">Adulto</label>
        </div>
        <div class="form-group">
            <label class="form-label">Genero:</label>
            <label class="form-label" for="">M</label>
            <input class="form-check-input" name="Genero" type="radio" value="M">
            <label class="form-label" for="">F</label>
            <input class="form-check-input" name="Genero" type="radio" value="F" required>
        </div>

        <div class="form-group">
            <label class="form-label" for="Animal">Animal:</label>
            <select name="Animal" id="identified" class="form-select">
                <option value="Perro">Perro</option>
                <option value="Gato">Gato</option>
                <option value="Pez">Pez</option>
                <option value="Otro">Otro</option>
            </select>
        </div>
        <div class="form-group">
            <label class="form-label" for="">Comprador</label>
            <select class="form-select" name="buyer_id" id="user_id">
                @foreach ($buyers as $buyer)
                    <option value="{{ $buyer->id }}">{{ $buyer->Nombre }}</option>
                @endforeach
            </select>
            @error('buyer_id')
                {{ $message->buyer_id }}
            @enderror
        </div>
        <div class="form-group">
            <label class="form-label" for="">Vendedor</label>
            <select class="form-select" name="seller_id" id="user_id">
                @foreach ($sellers as $seller)
                    <option value="{{ $seller->id }}">{{ $seller->Nombre }}</option>
                @endforeach
            </select>
            @error('seller_id')
                {{ $message->seller_id }}
            @enderror
        </div>
        <div class="form-group">
            <label class="form-label" for="">Foto de la mascota<span>Campo no obligatorio</span> </label>
            <input class="form-control" type="file" name="archivo[]" multiple>
            @if ($errors->has('archivo[]'))
                {{ $errors->get('archivo.*') }}
                {{-- @foreach ($errors->get('archivo.*') as archivo)
                    {{ $message->archivo }}
                @endforeach --}}
            @endif
        </div>

        <div class="text-center my-2"><input class="btn btn-success" type="submit" value="Registrar"></div>

    </form>

</x-template>
