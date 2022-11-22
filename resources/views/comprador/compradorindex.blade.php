<x-template titulo='Listado de Compradores'>
  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      Comprador
    </a>
      <ul class="navbar-nav ms-auto">
          <li>
            <a class="btn btn-outline-light" href="/comprador/create" role="button">Añadir Comprador</a>
            <a class="btn btn-outline-light" href="/menu" role="button">INICIO</a>
          </li>
      </ul>
  </nav>
    <table  class="table table-striped table-dark">
    <thead>
         <tr>
              <th scope="col">ID</th>
              <th scope="col">Usuario</th> 
              <th scope="col">Nombre</th>
              <th scope="col">Edad</th>
              <th scope="col">Mascota</th>
              <th scope="col">Compradores</th>
              <th scope="col">Editar</th>
              <th scope="col">Eliminar</th>
          </tr>
          </thead>
         @foreach ($comprador as $comprador)
         <tr>
          <td>{{$comprador->id}}</td>
          <td>{{$comprador->user->name}}</td>
          <td>
            <a href="/comprador/{{$comprador->id}}">
               {{$comprador->Nombre}}
            </a>
          </td>


           <td>{{$comprador->Edad}}</td>
           <td>{{$comprador->Mascota}}</td>
           <td><a href="/comprador/{{$comprador->id}}/edit">Editar</a></td>


         <td>
          <form action="/comprador/{{$comprador->id}}" method="POST">
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