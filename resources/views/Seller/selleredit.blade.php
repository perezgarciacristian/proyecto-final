<x-template titulo="Editar vendedor">
   <form action="/seller/{{$seller->id}}" method="POST" enctype="multipart/form-data" class="container">
    @csrf
    @method('patch')
    
    <div class="form-group">
    <label for="Nombre" class="form-label">Nombre:</label>
    <input type="text"  name="Nombre" value="{{$seller->Nombre}}" class="form-control">
    </div>
    


    
    <div class="form-group">
    <p>Genero:
        <input name="Genero" type="radio" value="M" class="form-check-input">M
        <input  name="Genero"type="radio" value="F" class="form-check-input">F
      </p>
    </div>
    

  <div class="form-group">
  <div class="text-center my-2"><input class="btn btn-success" type="submit" value="Editar"></div>
  </div>
</form>
</x-template>