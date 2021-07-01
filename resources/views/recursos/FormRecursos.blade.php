{{-- <!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Tiendas</title>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body> --}}
@extends('layouts.tabler')
@section('content')
    <div class="row">
        <div class="col-12">
            @if(isset($recurso))
                <form class="card" action="{{ route('recurso.update', [$recurso]) }}" method="POST">
                    @method('patch')
            @else
                <form class="card" action="{{ route('recurso.store') }}" method="POST">
            @endif
                    <div class="card-header">
                        <div class="card-title">
                            <h3>Formulario Tienda</h3>
                        </div>
                    </div>
                    @csrf
                    @include('partials.form-error')
                    <div class="card-body col-6">
                        <div class="form-group">
                            <label class="form-label" for="nombre">
                                Nombre
                            </label>
                            <input class="form-control" id="name" type="text" name="nombre" value="{{ old('nombre') ?? $recurso->nombre ?? '' }}"><br>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="direccion">
                                Direccion
                            </label>
                            <input class="form-control" id="direccion" type="text" name="direccion" value="{{ old('direccion') ?? $recurso->direccion ?? '' }}"><br>
                        </div>
                        <div class="form-group">
                                <label class="form-label" for="codigo">
                                Codigo
                                </label>
                                <input class="form-control" id="codigo" type="text" name="codigo" value="{{ old('codigo') ?? $recurso->codigo ?? '' }}"><br>
                        </div>
                        <div class="form-group">
                                <label class="form-label" for="categoria_id">
                                Ciudad
                                </label>
                                <select class="form-control" id="categoria_id" name="categoria_id">
                                    @foreach ($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
                                    @endforeach
                                </select><br>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <div class="d-flex">
                        <button type="submit" class="btn btn-primary ml-auto">Aceptar</button>
                        </div>
                    </div>
                </form><br>
            <a href="/">Menu Principal</a><br>
        </div>
    </div>
@endsection
            {{-- </body>
</html> --}}
