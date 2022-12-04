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
            <input type="radio" name="Edad" value="menor">
            <label for="">Adulto</label>
            <input type="radio" name="Edad" value="adulto" required>
        </div>
        <div>
            <label for="">Genero</label>
            <label for="">M</label>
            <input name="Genero" type="radio" value="M">
            <label for="">F</label>
            <input name="Genero"type="radio" value="F">
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
