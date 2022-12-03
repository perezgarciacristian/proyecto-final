<!DOCTYPE html >
<html lang="es">
  <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Mascotas</title>
   <link rel="stylesheet" href="/pet">
  </head>
  <body>
  
   <form action="/pet/{{$pet->id}}" method="POST">
    @csrf
    @method('patch')
    
    <div>
    <label for="Nombre">Nombre:</label>
    <input type="text"  name="Nombre" value="{{$pet->Nombre}}">
    </div>
    
    <div>
    <p>Edad:
      <input type="radio" name="Edad" value="menor"> Menor
      <input type="radio" name="Edad" value="adulto" required> Adulto 
      </p>
    </div>

    
    <div>
    <p>Genero:
        <input name="Genero" type="radio" value="M">M
        <input  name="Genero"type="radio" value="F">F
      </p>
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
  
  <input type="submit" value="Editar"> 
  </div>
</form>
  </body>
</html>