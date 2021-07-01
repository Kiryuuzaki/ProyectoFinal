<div class="dropdown">
    <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
        <span class="avatar m-1" style="background-image: url(./assets/images/vaq.png)"></span>
        <small class="text-muted d-block mt-1 ml-2">Bienvenido</small>
      </span>
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
      <a class="btn btn-blue ml-2 mb-1" href="{{ route('profile.show') }}">Perfil
      </a><br>
      <form class="d-inline-block" action="{{ route('logout') }}" method="POST">
        @csrf
        <button class="btn btn-blue ml-2 mb-1" type="submit">
            Salir
        </button>
      </form>
      @if (Route::has('login'))
                <div class="">
                    @auth
                        <a href="{{ url('/') }}"></a>
                    @else
                        <a class="btn btn-blue ml-2 mb-1" href="{{ route('login') }}">Login</a><br>

                        @if (Route::has('register'))
                            <a class="btn btn-blue ml-2 mb-1" href="{{ route('register') }}">Registrar</a>
                        @endif
                    @endif
                </div>
        @endif
    </div>
</div>
