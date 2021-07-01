{{-- <!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Productos</title>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="bg-gray-200">
        <div class="container mx-auto text-center">

        </div> --}}
        @extends('layouts.tabler')

        @section('content')
        <div class="row">
            <div class="col-12 col-md-12">
                <h1>Listado de Productos</h1>
                <div class="card">
                    <div class="table-responsive">
                            <h3 class="d-inline-block m-4">Productos</h3>
                            @can('admin')
                            <a class="d-inline-block btn btn-blue m-2 pull-right" href="{{ route('productos.create')}}">Crear Nuevo Producto</a>
                            @endcan
                        <table class="table table-hover table-outline">
                            <tr>
                                <th class="">ID</th>
                                <th class="">Nombre</th>
                                <th class="">Precio</th>
                                <th class="">Cantidad</th>
                                <th class="">Etiquetas</th>
                            </tr>
                            @foreach ($productos as $producto)
                                <tr>
                                    <td class="">{{ $producto->id }}</td>
                                    <td class=""> <a href="/productos/{{ $producto->id }}">{{ $producto->nombre }}</a></td>
                                    <td>{{ '$' . $producto->precio }}</td>
                                    <td>{{ $producto->cantidad }}</td>
                                    <td>
                                        @foreach ($producto->tags as $tag)
                                            {{ $tag->tag }} <br>
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                        </table><br>
                    </div>
                </div>
            </div>
            <a href="/">Menu Principal</a><br>
        </div>
        @endsection
    {{-- </body>
</html> --}}
