<x-template titulo='Listado de Vacunas'>

       <table class="table table-striped table-dark">
         <tr>
              <th scope="col">ID</th>
              <th scope="col">Usuario</th>
              <th scope="col">Tipo</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Componentes</th>
              <th scope="col">Editar</th>
              <th scope="col">Eliminar</th>
          </tr>
 
         @foreach ($vaccines as $vaccines)
         <tr>
          <td>{{$vaccines->id}}</td>
          <td>{{$vaccines->user->name}}</td>
          <td>
            <a href="/vaccines/{{$vaccines->id}}">
               {{$vaccines->Tipo}}
            </a>
          </td>

           
           <td>{{$vaccines->Descripcion}}</td>
           <td>{{$vaccines->Componentes}}</td>
           <td><a href="/vaccines/{{$vaccines->id}}/edit">Editar</a></td>


         <td>
          <form action="/vaccines/{{$vaccines->id}}" method="POST">
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