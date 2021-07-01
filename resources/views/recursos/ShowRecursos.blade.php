{{-- <!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Tiendas</title>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="bg-gray-200"> --}}
        @extends('layouts.tabler')
        @section('content')

        <div class="row">
            <div class="col-12 col-md-12">
                <div class="card">
                    <div class="table-responisve">
                        <h1 class="d-inline-block m-4">Informacion de Tienda</h1>
                        <div class="btn-group d-inline-block pull-right pt-1" role="group">
                            @can('update',$recurso)
                            <button class="btn btn-blue m-2" type="submit">
                                <a class="text-white" href="{{ route('recurso.edit', [$recurso->id]) }}">Editar Tienda</a>
                            </button>
                            @endcan
                            @can('delete',$recurso)
                            <form class="d-inline-block" action="{{ route('recurso.destroy',[$recurso->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-blue m-2" type="submit">
                                 Eliminar Tienda
                                </button>
                            </form>
                            @endcan
                        </div>
                        <table class="table table-hover table-outline">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Direccion</th>
                                <th>C.P</th>
                                <th>Categoria</th>
                            </tr>
                            <tr>
                                <td>{{ $recurso->id }}</td>
                                <td>{{ $recurso->nombre }}</td>
                                <td>{{ $recurso->direccion }}</td>
                                <td>{{ $recurso->codigo }}</td>
                                <td>{{ $recurso->categoria->categoria }}</td>
                            </tr>
                        </table><br>
                    </div>
                </div>
                <a href="/recurso">Menu anterior</a><br>
            </div>
        </div>
        @endsection
        {{-- </body>
</html> --}}
