{{-- <!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Productos</title>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body> --}}
@extends('layouts.tabler')
@section('content')
    <div class="row">
        <div class="col-12">
            @if(isset($producto))
                <form class="card" action="{{ route('productos.update', [$producto]) }}" method="POST">
                    @method('patch')
            @else
                <form class="card" action="{{ route('productos.store') }}" method="POST">
            @endif
                    <div class="card-header">
                        <div class="card-title">
                            <h3>Formulario producto</h3>
                        </div>
                    </div>
                    @csrf
                    @include('partials.form-error')
                    <div class="card-body col-6">
                        <div class="form-group">
                            <label class="form-label" for="nombre">
                                Nombre
                            </label>
                            <input class="form-control" id="name" type="text" name="nombre" value="{{ old('nombre') ?? $producto->nombre ?? '' }}"><br>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="precio">
                                Precio
                            </label>
                            <input class="form-control" id="precio" type="number" min="0" name="precio "value="{{ old('precio_') ?? $producto->precio ?? '' }}"><br>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="cantidad">
                            Cantidad
                            </label>
                            <input class="form-control" id="cantidad" type="number" min="0" name="cantidad "value="{{ old('cantidad_') ?? $producto->cantidad ?? '' }}"><br>
                        </div>
                        <div class="form-group">
                            {!! Form::label('tag_id[]', 'Tags:', ['class' => 'form-label']) !!}
                            {!! Form::select('tag_id[]', $tags, isset($producto) ? $producto->tags()->pluck('id') : null, ['class' => 'form-control', 'multiple' => 'multiple']) !!}
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <div class="d-flex">
                          <button type="submit" class="btn btn-primary ml-auto">Aceptar</button>
                        </div>
                    </div>
                </form><br>
            <a class="" href="/">Menu Principal</a><br>
        </div>
    </div>
@endsection
            {{-- </body>
</html> --}}
