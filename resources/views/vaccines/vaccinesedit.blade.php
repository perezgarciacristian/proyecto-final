<!DOCTYPE html >
<html lang="es">
  <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Editar Vacunas</title>
   <link rel="stylesheet" href="/vaccine">
  </head>
  <body>
  
  <form action="/vaccine/{{$vaccine->id}}" method="POST">
    @csrf
    @method('patch')
    <div>
    <label for="Tipo">Tipo:</label>
    <select name="Tipo" id="identified">
        <option value="Vacuna Viva">Vacuna Viva</option>
        <option value="Vacuna Muerta">Vacuna Muerta</option>
        <option value="Vacuna diseño">Vacuna Diseño</option>
        <option value="Otra">Otra</option>
      </select>
    </div>

    <div>
    <label for="Descripcion">Descripcion:</label>	
    <textarea name="Descripcion" id="identified" value="{{$vaccine->Descripcion}}"
    rows="no_renglones"
    cols="no_columnas">
    </textarea>
    </div>

    <div>
    <label for="Componentes">Componentes:</label>
    <select name="Componentes" id="identified">
        <option value="Antigenos">Antigenos</option>
        <option value="Adyuvantes">Adyuvantes</option>
        <option value="Inactivadores">Inactivadores</option>
        <option value="Conservantes">Conservantes</option>
        <option value="Excipientes">Excipientes</option>
      </select>
    </div>
    

  <div>
  
  <input type="submit" value="Editar"> 
  </div>
</form>
  </body>
</html>