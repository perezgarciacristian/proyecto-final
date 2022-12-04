<x-template titulo='Listado de Vendedores'>
  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      Vendedor
    </a>
      <ul class="navbar-nav ms-auto">
          <li>
            <a class="btn btn-outline-light" href="/seller/create" role="button">Añadir vendedor</a>
            <a class="btn btn-outline-light" href="/menu" role="button">INICIO</a>
          </li>
      </ul>
  </nav>
       <table class="table table-striped table-dark">
         <tr>
              <th scope="col">ID</th>
              <th scope="col">Usuario</th>
              <th scope="col">Nombre</th>
              <th scope="col">Genero</th>
              <th scope="col">Editar</th>
              <th scope="col">Eliminar</th>
          </tr>
 
         @foreach ($Seller as $seller)
         <tr>
          <td>{{$seller->id}}</td>
          <td>{{$seller->user->name}}</td>
          <td>
            <a href="/seller/{{$seller->id}}">
               {{$seller->Nombre}}
            </a>
          </td>

           
           <td>{{$seller->Genero}}</td>
           <td><a href="/seller/{{$seller->id}}/edit">Editar</a></td>


         <td>
          <form action="/seller/{{$seller->id}}" method="POST">
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