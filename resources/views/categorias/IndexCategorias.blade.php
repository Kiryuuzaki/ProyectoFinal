{{-- <!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Ciudades</title>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="bg-gray-200"> --}}
        @extends('layouts.tabler')
        @section('content')
        <div class="row">
            <div class="col-12">
                <h1>Listado de Ciudades</h1>
                @foreach ($categorias as $categoria)
                    <h3>{{ $categoria->categoria }}</h3>
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-hover table-outline">
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Direccion</th>
                                    <th>C.P</th>
                                </tr>
                                @foreach ($categoria->recursos as $recurso)
                                    <tr>
                                        <td>{{ $recurso->id }}</td>
                                        <td> <a href="/recurso/{{ $recurso->id }}">{{ $recurso->nombre }}</a></td>
                                        <td>{{ $recurso->direccion }}</td>
                                        <td>{{ $recurso->codigo }}</td>
                                    </tr>
                                @endforeach
                            </table><br>
                        </div>
                    </div>
                    <br>
                @endforeach
                <a href="/">Menu Principal</a><br>
            </div>
        </div>
        @endsection
    {{-- </body>
</html> --}}
