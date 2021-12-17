<?php

namespace App\Http\Controllers;

use App\Models\Sectore;
use Illuminate\Http\Request;

/**
 * Class SectoreController
 * @package App\Http\Controllers
 */
class SectoreController extends Controller
{
    public function __contruct(){
        $this->middleware('can:admin.sectore.index')->only('index');
        $this->middleware('can:admin.sectore.create')->only('create','store');
        $this->middleware('can:admin.sectore.edit')->only('edit','update');
        $this->middleware('can:admin.sectore.destroy')->only('destroy');
    }

    public function index(){
        $sectores = Sectore::paginate();
        return view('sectore.index', compact('sectores'))
            ->with('i', (request()->input('page', 1) - 1) * $sectores->perPage());
    }

    public function create(){
        $sectore = new Sectore();
        return view('sectore.create', compact('sectore'));
    }

    public function store(Request $request){
        request()->validate(Sectore::$rules);
        $sectore = Sectore::create($request->all());
        return redirect()->route('sectores.index')
            ->with('success', 'Sectore created successfully.');
    }

    public function show($id){
        $sectore = Sectore::find($id);
        return view('sectore.show', compact('sectore'));
    }

    public function edit($id){
        $sectore = Sectore::find($id);
        return view('sectore.edit', compact('sectore'));
    }

    public function update(Request $request, Sectore $sectore)
    {
        request()->validate(Sectore::$rules);
        $sectore->update($request->all());
        return redirect()->route('sectores.index')
            ->with('success', 'Sectore updated successfully');
    }

    public function destroy($id)
    {
        $sectore = Sectore::find($id)->delete();
        return redirect()->route('sectores.index')
            ->with('success', 'Sectore deleted successfully');
    }
}
