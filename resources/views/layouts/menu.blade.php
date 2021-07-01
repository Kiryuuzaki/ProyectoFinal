<ul class="nav nav-tabs border-0 flex-column flex-lg-row">
    <li class="nav-item">
      <a href="/" class="nav-link"><i class="fe fe-home"></i> Inicio</a>
    </li>
    <li class="nav-item">
        <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown" aria-expanded="false"><i class="fe fe-box"></i>Contenido</a>
        <div class="dropdown-menu dropdown-menu-arrow" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 5px, 0px); top: 0px; left: 0px; will-change: transform;" x-out-of-boundaries="">
            <a href="{{ route('productos.index') }}" class="dropdown-item ">Productos</a>
            <a href="{{ route('categoria.index') }}" class="dropdown-item ">Ciudades</a>
            <a href="{{ route('recurso.index') }}" class="dropdown-item ">Tiendas</a>
        </div>
    </li>
</ul>


