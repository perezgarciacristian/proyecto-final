<x-template titulo='Listado de Animales'>


    <table class="table table-striped table-dark">
    <thead>
         <tr>
              <th scope="col">ID</th>
              <th scope="col">Usuario</th>
              <th scope="col">Nombre</th>
              <th scope="col">Edad</th>
              <th scope="col">Genero</th>
              <th scope="col">Animal</th>
              <th scope="col">Editar</th>
              <th scope="col">Eliminar</th>
          </tr>
          </thead>
         @foreach ($mascotas as $mascota)
         <tr>
          <td>{{$mascota->id}}</td>
          <td>{{$mascota->user->name}}</td>
          <td>
            <a href="/mascotas/{{$mascota->id}}">
               {{$mascota->Nombre}}
            </a>
          </td>

           
           <td>{{$mascota->Edad}}</td>
           <td>{{$mascota->Genero}}</td>
           <td>{{$mascota->Animal}}</td>
           <td><a href="/mascotas/{{$mascota->id}}/edit">Editar</a></td>


         <td>
          <form action="/mascotas/{{$mascota->id}}" method="POST">
          @csrf
          @method('DELETE')
          <input type= "Submit" value= "Eliminar">
          
          </form>
          </td>
          </tr>
         @endforeach
            
         

         </td>
    </table>
</x-template>
