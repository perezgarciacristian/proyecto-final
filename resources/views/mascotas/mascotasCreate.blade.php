<x-template titulo='Formulario Mascotas'>


   <form action="/mascotas" method="post">
    @csrf

    <div>
    <label for="Nombre">Nombre:</label>
    <input type="text"  name="Nombre" required>
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
        <input  name="Genero"type="radio" value="F" required>F
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
   <select name="user_id" id="user_id">
    @foreach($users as $user)
       <option   value="{{$user->id}}">{{$user->name}}</option>
    @endforeach
   </select>
   </div>

   <div>
   <select name="comprador_id" id="user_id">
    @foreach($Comprador as $comprador)
       <option   value="{{$comprador->id}}">{{$comprador->Nombre}}</option>
    @endforeach

   </select>
   </div>


<div>
   <select name="seller_id" id="user_id">
    @foreach($Seller as $seller)
       <option   value="{{$seller->id}}">{{$seller->Nombre}}</option>
    @endforeach

   </select>
   </div>
  
  <input type="submit" value="Registrar"> 
 
</form>

</x-template>
