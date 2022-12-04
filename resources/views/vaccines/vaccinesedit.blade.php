<x-template titulo="Editar vacuna">
  
  <form action="/vaccine/{{$vaccine->id}}" method="POST" enctype="multipart/form-data" class="container">
    @csrf
    @method('patch')
    <div class="form-group">
    <label for="Tipo" class="form-label">Tipo:</label>
    <select name="Tipo" id="identified" class="form-select">
        <option value="Vacuna Viva">Vacuna Viva</option>
        <option value="Vacuna Muerta">Vacuna Muerta</option>
        <option value="Vacuna diseño">Vacuna Diseño</option>
        <option value="Otra">Otra</option>
      </select>
    </div>
    <br>
    <div class="form-group">
    <label for="Descripcion" class="form-label">Descripcion:</label>	
    <input type="text"  name="Descripcion" value="{{$vaccine->Descripcion}}" class="form-control">
    </div>
    <br>
    <div class="form-group">
    <label for="Componentes" class="form-label">Componentes:</label>
    <select name="Componentes" id="identified" class="form-select">
        <option value="Antigenos">Antigenos</option>
        <option value="Adyuvantes">Adyuvantes</option>
        <option value="Inactivadores">Inactivadores</option>
        <option value="Conservantes">Conservantes</option>
        <option value="Excipientes">Excipientes</option>
      </select>
    </div>
    

  <div class="text-center my-2">
    <input class="btn btn-success" type="submit" value="Editar">
  </div>
</form>
</x-template>