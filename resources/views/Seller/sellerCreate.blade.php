<x-template titulo='Formulario Vendedor'>


   <form action="/seller" method="post">
    @csrf

    <div>
    <label for="Nombre">Nombre:</label>
    <input type="text"  name="Nombre">
</div>

    
    <div>
    <p>Genero:
        <input name="Genero" type="radio" value="M">M
        <input  name="Genero"type="radio" value="F">F
      </p>
</div>
   <select name="user_id" id="user_id">
    @foreach($users as $user)
       <option   value="{{$user->id}}">{{$user->name}}</option>
    @endforeach

   </select>
  
  <input type="submit" value="Registrar"> 
 
</form>

</x-template>