<!DOCTYPE html >
<html lang="es">
  <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Editar Vendedor</title>
   <link rel="stylesheet" href="/mascotas">
  </head>
  <body>
  
   <form action="/seller/{{$seller->id}}" method="POST">
    @csrf
    @method('patch')
    
    <div>
    <label for="Nombre">Nombre:</label>
    <input type="text"  name="Nombre" value="{{$seller->Nombre}}">
    </div>
    


    
    <div>
    <p>Genero:
        <input name="Genero" type="radio" value="M">M
        <input  name="Genero"type="radio" value="F">F
      </p>
    </div>
    

  <div>
  
  <input type="submit" value="Editar"> 
  </div>
</form>
  </body>
</html>