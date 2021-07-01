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
                <h1>Listado de Tiendas</h1><br>
                <div class="card">
                    <div class="table-responsive">
                        <h3 class="d-inline-block m-4">Tiendas</h3>
                        @can('create', App\Models\Recurso::class)
                        <a class="d-inline-block btn btn-blue m-2 pull-right" href="{{ route('recurso.create')}}">Crear Nueva Tienda</a><br>
                        @endcan
                        <table class="table table-hover table-outline">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Direccion</th>
                                <th>C.P</th>
                                <th>Ciudad</th>
                            </tr>
                            @foreach ($recursos as $recurso)
                                <tr>
                                    <td>{{ $recurso->id }}</td>
                                    <td> <a href="/recurso/{{ $recurso->id }}">{{ $recurso->nombre }}</a></td>
                                    <td>{{ $recurso->direccion }}</td>
                                    <td>{{ $recurso->codigo }}</td>
                                    <td>{{ $recurso->categoria->categoria }}</td>
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
