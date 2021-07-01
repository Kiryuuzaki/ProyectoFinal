{{-- <!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Productos</title>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="bg-gray-200"> --}}
        @extends('layouts.tabler')
        @section('content')
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="card">
                    <div class="table-responsive">
                        <h1 class="d-inline-block m-4">Informacion de Producto</h1>
                        <div class="btn-group d-inline-block pull-right pt-1" role="group">
                            @can('admin')
                            <button class="btn btn-blue m-2" type="submit">
                                <a class="text-white" href="{{ route('productos.edit', [$producto->id]) }}">Editar Producto</a>
                            </button>
                            <form class="d-inline-block" action="{{ route('productos.destroy',[$producto->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-blue m-2" type="submit">
                                 Eliminar Producto
                                </button>
                            </form>
                            @endcan
                        </div>
                        <table class="table table-hover table-outline">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>Etiquetas</th>
                            </tr>
                            <tr>
                                <td>{{ $producto->id }}</td>
                                <td>{{ $producto->nombre }}</td>
                                <td>{{ '$' . $producto->precio }}</td>
                                <td>{{ $producto->cantidad }}</td>
                                <td>
                                    @foreach ($producto->tags as $tag)
                                        {{ $tag->tag }} <br>
                                    @endforeach
                                </td>
                            </tr>
                        </table><br>
                    </div>
                </div>
                <a href="/productos">Menu anterior</a><br>
            </div>
        </div>
        @endsection
        {{-- </body>
</html> --}}
