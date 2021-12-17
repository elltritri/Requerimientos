<?php

namespace App\Http\Controllers;

use App\Models\Estadorequerimiento;
use App\Models\Sectore;
use Illuminate\Http\Request;

/**
 * Class EstadorequerimientoController
 * @package App\Http\Controllers
 */
class EstadorequerimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estadorequerimientos = Estadorequerimiento::paginate();

        return view('estadorequerimiento.index', compact('estadorequerimientos'))
            ->with('i', (request()->input('page', 1) - 1) * $estadorequerimientos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sectore = sectore::pluck('sectores','id');
        $estadorequerimiento = new Estadorequerimiento();
        return view('estadorequerimiento.create', compact('estadorequerimiento', 'sectore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Estadorequerimiento::$rules);

        $estadorequerimiento = Estadorequerimiento::create($request->all());

        return redirect()->route('estadorequerimientos.index')
            ->with('success', 'Estadorequerimiento created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estadorequerimiento = Estadorequerimiento::find($id);

        return view('estadorequerimiento.show', compact('estadorequerimiento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estadorequerimiento = Estadorequerimiento::find($id);

        return view('estadorequerimiento.edit', compact('estadorequerimiento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Estadorequerimiento $estadorequerimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estadorequerimiento $estadorequerimiento)
    {
        request()->validate(Estadorequerimiento::$rules);

        $estadorequerimiento->update($request->all());

        return redirect()->route('estadorequerimientos.index')
            ->with('success', 'Estadorequerimiento updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $estadorequerimiento = Estadorequerimiento::find($id)->delete();

        return redirect()->route('estadorequerimientos.index')
            ->with('success', 'Estadorequerimiento deleted successfully');
    }
}
