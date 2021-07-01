<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Recurso;
use Illuminate\Http\Request;

class RecursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recursos =  Recurso::with('categoria')->get();
        return view ('recursos.IndexRecursos', compact('recursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', Recurso::class);
        $categorias = Categoria::all();
        return view('recursos.FormRecursos', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'codigo' => 'required|string|max:255',
        ]);
        //guarda DB
        $recurso = new Recurso();
        $recurso->categoria_id = $request->categoria_id;
        $recurso->nombre = $request->nombre;
        $recurso->direccion = $request->direccion;
        $recurso->codigo = $request->codigo;
        $recurso->save();
        //direcciona*/
        //Producto::create($request->all());
        return redirect()->route('recurso.index')
        ->with([
            'mensaje' => 'Tienda creada correctamente',
            'alert-type' => 'alert-success'
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recurso  $recurso
     * @return \Illuminate\Http\Response
     */
    public function show(Recurso $recurso)
    {
        return view('recursos.ShowRecursos',compact('recurso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recurso  $recurso
     * @return \Illuminate\Http\Response
     */
    public function edit(Recurso $recurso)
    {
        $this->authorize('update', $recurso);
        $categorias = Categoria::all();
        return view('recursos.FormRecursos',compact('categorias','recurso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recurso  $recurso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recurso $recurso)
    {
        $request -> validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'codigo' => 'required|string|max:255',
        ]);

        $recurso->categoria_id = $request->categoria_id;
        $recurso->nombre = $request->nombre;
        $recurso->direccion = $request->direccion;
        $recurso->codigo = $request->codigo;
        $recurso->save();

        //Producto::where('id', $producto->id)->update($request->except('_method','_token'));
        return redirect()->route('recurso.show',[$recurso])
        ->with([
            'mensaje' => 'Tienda actualizada correctamente',
            'alert-type' => 'alert-success'
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recurso  $recurso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recurso $recurso)
    {
        $this->authorize('delete', $recurso);
        $recurso->delete();
        return redirect()->route('recurso.index')
        ->with([
            'mensaje' => 'Tienda eliminada correctamente',
            'alert-type' => 'alert-danger'
            ]);
    }
}
