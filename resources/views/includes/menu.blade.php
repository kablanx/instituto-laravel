<div class="card">
    <div class="card-header ">
        Menú
    </div>
    <div class="card-body">
        <ul class="list-group">

            @if(auth()->check())
            <li class="list-group-item">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    Usuarios
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a href="{{route('user.listado',['regsxpag'=>2])}}" class="dropdown-item">Listado</a>
                </div>
            </li>
            <li class="list-group-item">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    Incidencias
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a href="{{route('incidencias.crear')}}" class="dropdown-item">Crear incidencia</a>
                    <a href="{{route('incidencias.listado', ['regsxpag'=>2])}}" class="dropdown-item">Listado</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            <li class="list-group-item">
                <a href="">
                    Mensajes
                </a>
            </li>
            @if(Auth::user()->rol=="administrador")
            <li class="list-group-item">
            <a href="{{ route('logs.listado', ['regsxpag'=>7])}}">
                    Logs
                </a>
            </li>
            @endif

            @else
            {{-- <li class="list-group-item">
                <a href="">
                    Hola
                </a>
            </li> --}}
            Conéctese para ver el menú
            @endif
        </ul>
    </div>
</div>