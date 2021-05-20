<header>
    {{-- <h1>Navegación</h1> --}}
    <nav class="main-nav">
        <ul>
            <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Inicio</a> {{--true agrega la clase active--}}
                <?php // dump(request()->routeIs('home')); //true si se encuentra en la ruta actual ?>
                {{--@dump(request()->routeIs('home')) {{--lo mismo de arriba pero hecho en blade / se movió arriba como condicional ternaria--}}
            </li>
            <li><a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'active' : ''}}">Cursos</a>{{--* indica todas las rutas secundarias de curso/--}}
                {{--@dump(request()->routeIs('cursos.index'))--}}
            </li>
            <li><a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active' : ''}}">Nosotros</a>
                {{--@dump(request()->routeIs('nosotros'))--}}
            </li>
        </ul>
    </nav>
</header>