<x-template titulo='Formulario Vendedor'>


   <form action="/seller" method="post" enctype="multipart/form-data" class="container">
    @csrf

    <div class="form-group">
    <label for="Nombre" class="form-label">Nombre:</label>
    <input type="text"  name="Nombre" class="form-control">
</div>

    
    <div class="form-group">
    <p>Genero:
        <input name="Genero" type="radio" value="M" class="form-check-input">M
        <input  name="Genero"type="radio" value="F" class="form-check-input">F
      </p>
</div>
   <select name="user_id" id="user_id" class="form-select">
    @foreach($users as $user)
       <option   value="{{$user->id}}">{{$user->name}}</option>
    @endforeach

   </select>
  
   <div class="text-center my-2">
      <input class="btn btn-success" type="submit" value="Registrar">
   </div>
 
</form>

</x-template>