<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/"><span class="flaticon-pawprint-1 mr-2"></span>Ganga Pets :V</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menú
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="/" class="nav-link">Inicio</a></li>
                <li class="nav-item"><a href="/pet" class="nav-link">Mascotas</a></li>
                <li class="nav-item"><a href="/buyer" class="nav-link">Comprador</a></li>
                <li class="nav-item"><a href="/seller" class="nav-link">Vendedor</a></li>
                <li class="nav-item"><a href="/vaccine" class="nav-link">Vacunas</a></li>
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                        this.closest('form').submit(); "
                            role="button">
                            <i class="fas fa-sign-out-alt"></i>
                            {{ __('Log Out') }}
                        </a>
                    </form>
                @else
                    <li><a class="nav-link" href="/login">Iniciar sesión</a></li>
                    <li><a class="nav-link" href="/register">Registrarse</a></li>
                @endauth

            </ul>
        </div>
    </div>
</nav>
