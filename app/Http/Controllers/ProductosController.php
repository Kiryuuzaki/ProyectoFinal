<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::with('tags')->get();

        return view('productos/productosIndex', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('admin');
        $tags = Tag::pluck('tag', 'id')->toArray();
        return view('productos/productosForm',compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //recibe datos
        //$request->all();
        //valida
        $request -> validate([
            'nombre' => 'required|string|max:255',
            'precio_' => 'required|integer',
            'cantidad_' => 'required|integer',
        ]);
        //guarda DB
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio_;
        $producto->cantidad = $request->cantidad_;
        $producto->save();
        //direcciona*/
        //Producto::create($request->all());
        $producto->tags()->attach($request->tag_id);
        return redirect('/productos')
        ->with([
            'mensaje' => 'Producto creado con exito',
            'alert-type' => 'alert-success'
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        return view('productos/productosShow',compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        Gate::authorize('admin');
        $tags = Tag::pluck('tag', 'id')->toArray();
        return view('productos/productosForm',compact('producto','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $request -> validate([
            'nombre' => 'required|string|max:255',
            'precio_' => 'required|integer',
            'cantidad_' => 'required|integer',
        ]);

        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio_;
        $producto->cantidad = $request->cantidad_;
        $producto->save();
        //Producto::where('id', $producto->id)->update($request->except('_method','_token'));
        $producto->tags()->sync($request->tag_id);
        return redirect()->route('productos.show',[$producto])
        ->with([
            'mensaje' => 'Producto actualizado con exito',
            'alert-type' => 'alert-success'
            ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        Gate::authorize('admin');
        $producto->delete();
        return redirect()->route('productos.index')
        ->with([
            'mensaje' => 'Producto eliminado con exito',
            'alert-type' => 'alert-danger'
            ]);
    }
}
