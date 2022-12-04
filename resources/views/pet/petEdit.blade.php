<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mascotas</title>
    <link rel="stylesheet" href="/mascotas">
</head>

<body>
    <h1>
        @foreach ($errors->all() as $message)
            {{ $message }}
        @endforeach
    </h1>
    <form action="/pet/{{ $pet->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div>
            <label for="Nombre">Nombre:</label>
            <input type="text" name="Nombre" value="{{ $pet->Nombre }}">
        </div>
        <div>
            <label for="">Edad</label>
            <label for="">Menor</label>
            @if ($pet->Edad == 'menor')
                <input type="radio" name="Edad" value="menor" checked>
            @else
                <input type="radio" name="Edad" value="menor">
            @endif
            <label for="">Adulto</label>
            @if ($pet->Edad == 'adulto')
                <input type="radio" name="Edad" value="adulto" checked>
            @else
                <input type="radio" name="Edad" value="adulto">
            @endif
        </div>
        <div>
            <label for="">Genero</label>
            <label for="">M</label>
            @if ($pet->Genero == 'M')
                <input name="Genero" type="radio" value="M" checked>
            @else
                <input name="Genero" type="radio" value="M">
            @endif

            <label for="">F</label>
            @if ($pet->Genero == 'F')
                <input name="Genero"type="radio" value="F" checked>
            @else
                <input name="Genero"type="radio" value="F">
            @endif

        </div>
        <div>
            <label for="Animal">Animal:</label>
            <select name="Animal" id="identified">
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
        <div>
            <table border="1">
                <caption>Imagen Mascota</caption>
                <tr>
                    <td colspan="2" align="center">
                        @if (!empty($pet->archivo))
                            <img src="{{ \Storage::url($pet->archivo->ubicacion) }}" alt="" width="200px">
                        @else
                            <p>No hay ninguna imagen</p>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td align="center" width="50%" height="">
                        <label for="">Editar</label>
                        <br>
                        <input type="file" name="archivo">
                    </td>
                    <td align="center">
                        @if (!empty($pet->archivo))
                            <a href="/pet/imagen/eliminar/{{ $pet->id }}">Eliminar</a>
                        @else
                            <p>No hay ninguna imagen</p>
                        @endif

                    </td>
                </tr>
            </table>
        </div>
        <div>
            <input type="submit" value="Editar">
        </div>
    </form>
</body>

</html>
