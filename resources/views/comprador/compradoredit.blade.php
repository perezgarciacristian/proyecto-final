<!DOCTYPE html >
<html lang="es">
  <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Editar Comprador</title>
   <link rel="stylesheet" href="/buyer">
  </head>
  <body>
  
   <form action="/buyer/{{$buyer->id}}" method="post">
    @csrf
    @method('patch')
    <div>
    <label for="Nombre">Nombre:</label>
    <input type="text"  name="Nombre" value="{{$buyer->Nombre}}">
    </div>
    
    <div>
    <p>Edad:
      <input type="radio" name="Edad" value="menor"> Menor
      <input type="radio" name="Edad" value="adulto" required> Adulto 
      </p>
    </div>

    
    <div>
    <label for="Mascota">Mascota:</label>
    <select name="Mascota" id="identified">
        <option value="Perro">Perro</option>
        <option value="Gato">Gato</option>
        <option value="Pez">Pez</option>
        <option value="Otra">Otra</option>
      </select>
    </div>

    

  <div>
  
  <input type="submit" value="Editar"> 
  </div>
</form>
  </body>
</html>