<x-template titulo='Listado de Animales'>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

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
