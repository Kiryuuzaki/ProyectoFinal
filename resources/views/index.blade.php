@extends('layouts.tabler')
@section('content')
{{-- <!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Productos</title>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="bg-gray-200"> --}}
        <div>
            <h1>Panel de administracion</h1>
        </div>
        <div>
            <a href="{{ route('productos.index') }}" class="btn btn-blue mb-2 mr-2">Productos</a>
            <h3 class="d-inline-block">Administra los Productos</h3>
        </div>
        <div>
            <a href="{{ route('categoria.index') }}" class="btn btn-blue mb-2 mr-2">Ciudades</a>
            <h3 class="d-inline-block">Lista de Ciudades</h3>
        </div>
        <div>
            <a href="{{ route('recurso.index') }}" class="btn btn-blue mb-2 mr-2">Tiendas</a>
            <h3 class="d-inline-block">Administra las Tiendas</h3>
        </div>
        <br><br><br><br><br>
        <div>
            <p class="text-right">Recuerda iniciar sesion para obtener el acceso<br>
                Solo los administadores pueden modificar los registros<br>
                Solicita permisos de administrador ya que por defecto no lo eres
            </p>
            <p class="text-right"></p>
        </div>
        @endsection
    {{-- </body>
</html> --}}
