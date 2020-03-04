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
                        <a href="{{route('user.pdf')}}" class="dropdown-item">PDF</a>
                    </div>
                </li>
                <li class="list-group-item">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Incidencias
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a href="{{route('incidencias.crear')}}" class="dropdown-item">Crear incidencia</a>
                        <a href="{{route('incidencias.listado', ['regsxpag'=>2])}}" class="dropdown-item">Listado</a>
                        <a href="{{route('incidencias.pdf')}}" class="dropdown-item">PDF</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                <li class="list-group-item">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Mensajes
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a href="{{ route('mensajes.bandeja', ['id'=>Auth::user()->id])}}" class="dropdown-item">Bandeja de entrada</a>
                        <a href="{{ route('mensajes.listado', ['regsxpag'=>2])}}" class="dropdown-item">Listado</a>
                        <a href="{{route('mensajes.pdf')}}" class="dropdown-item">PDF</a>
                    </div>
                </li>
                @if(Auth::user()->rol=="administrador")
                <li class="list-group-item">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Logs
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a href="{{ route('logs.listado', ['regsxpag'=>7])}}" class="dropdown-item">Listado</a>
                        <a href="{{route('logs.pdf')}}" class="dropdown-item">PDF</a>
                    </div>
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