<x-template titulo='Formulario Comprador'>
  
  
   <form action="/buyer" method="post">
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
    <label for="Mascota">Mascota:</label>
    <select name="Mascota" id="identified">
        <option value="Perro">Perro</option>
        <option value="Gato">Gato</option>
        <option value="Pez">Pez</option>
        <option value="Otra">Otra</option>
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