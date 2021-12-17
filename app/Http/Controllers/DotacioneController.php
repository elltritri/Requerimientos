<?php

namespace App\Http\Controllers;

use App\Models\Dotacione;
use App\Models\Sectore;
use Illuminate\Http\Request;

/**
 * Class DotacioneController
 * @package App\Http\Controllers
 */
class DotacioneController extends Controller
{

    public function index()
    {
        $dotaciones = Dotacione::paginate();
        return view('dotacione.index', compact('dotaciones'))
            ->with('i', (request()->input('page', 1) - 1) * $dotaciones->perPage());
    }

    public function create()
    {
        $sector = Sectore::pluck('sectores');
        $dotacione = new Dotacione();
        return view('dotacione.create', compact('dotacione','sector'));
    }

    
    public function store(Request $request)
    {
        request()->validate(Dotacione::$rules);
        $dotacione = Dotacione::create($request->all());

        return redirect()->route('dotacione.index')
            ->with('success', 'Dotacione created successfully.');
    }

   
    public function show($id)
    {
        $dotacione = Dotacione::find($id);

        return view('dotacione.show', compact('dotacione'));
    }

    
    public function edit($id)
    {
        $dotacione = Dotacione::find($id);
        $sector = Sectore::pluck('sectores');

        return view('dotacione.edit', compact('dotacione','sector'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Dotacione $dotacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dotacione $dotacione)
    {
        request()->validate(Dotacione::$rules);

        $dotacione->update($request->all());

        return redirect()->route('dotaciones.index')
            ->with('success', 'Dotacione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $dotacione = Dotacione::find($id)->delete();

        return redirect()->route('dotaciones.index')
            ->with('success', 'Dotacione deleted successfully');
    }
}
