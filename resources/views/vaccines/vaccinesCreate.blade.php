<x-template titulo='Formulario Vacunas'>


   <form action="/vaccine" method="post">
    @csrf

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
    <textarea name="Descripcion" id="identified"
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

   <select name="user_id" id="user_id">
    @foreach($users as $user)
       <option   value="{{$user->id}}">{{$user->name}}</option>
    @endforeach

   </select>
  
  <input type="submit" value="Registrar"> 
 
</form>

</x-template>