<x-template titulo='Formulario Mascotas'>


   <form action="/mascotas" method="post">
    @csrf

    <div>
    <label for="Nombre">Nombre:</label>
    <input type="text"  name="Nombre">
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

   <select name="user_id" id="user_id">
    @foreach($users as $user)
       <option   value="{{$user->id}}">{{$user->name}}</option>
    @endforeach

   </select>
  
  <input type="submit" value="Registrar"> 
 
</form>

</x-template>
