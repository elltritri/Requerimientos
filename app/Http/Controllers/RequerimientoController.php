<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Estadorequerimiento;
use App\Models\Requerimiento;
use App\Models\Sectore;
use App\Models\Dotacione;
use Illuminate\Http\Request;

class RequerimientoController extends Controller
{
    public function __contruct(){
        $this->middleware('can:admin.requerimiento.index')->only('index');
        $this->middleware('can:admin.requerimiento.create')->only('create','store');
        $this->middleware('can:admin.requerimiento.edit')->only('edit','update');
        $this->middleware('can:admin.requerimiento.destroy')->only('destroy');
    }

    public function indexsistemas() {
        $estados = Estadorequerimiento::all();
        $sectores = Sectore::all();
        $requerimientos = Requerimiento::paginate();
        return view('requerimiento.indexsistemas', compact('requerimientos','sectores','estados'))
            ->with('i', (request()->input('page', 1) - 1) * $requerimientos->perPage());    
    }

    public function indexmantenimiento() {
        $sectores = Sectore::all();
        $estados = DB::table('estadorequerimientos')->select('estado');
        $requerimientos = Requerimiento::paginate();
        return view('requerimiento.indexmantenimiento', compact('requerimientos','sectores','estados'))
            ->with('i', (request()->input('page', 1) - 1) * $requerimientos->perPage());    
    }

    public function indexpanol() {
        $estados = Estadorequerimiento::all();
        $sectores = Sectore::all();
        $requerimientos = Requerimiento::paginate();
        return view('requerimiento.indexpanol', compact('requerimientos','sectores','estados'))
            ->with('i', (request()->input('page', 1) - 1) * $requerimientos->perPage());    
    }
    
    public function indexcharts(){
        $datos= DB::table('requerimientos')->count();
        $estados = DB::table('estadorequerimientos')->select('estado')->get();
        return view('requerimiento.chartsistemas', compact('estados'));
    }

    public function create()    {
        $estados = Estadorequerimiento::pluck('estado','id');
        $sectores = Sectore::pluck('sectores', 'id');
        $requerimiento = new Requerimiento();


        return view('requerimiento.create', compact('requerimiento', 'sectores','estados'));
    }

    public function store(Request $request){
        request()->validate(Requerimiento::$rules);
        $requerimiento = Requerimiento::create($request->all());
            if (request()->Area==1) {
                return redirect()->route('requerimientossistema')
                ->with('success', 'Requerimiento created successfully.');    
            }elseif(request()->Area==2){
                return redirect()->route('requerimientosmantenimiento')
                ->with('success', 'Requerimiento created successfully.');    
            }
            elseif(request()->Area==3){
                return redirect()->route('requerimientopanol')
                ->with('success', 'Requerimiento created successfully.');    
            }
            
    }

    public function show($id){
        $sectores = sectore::all('sectores');
        $requerimiento = Requerimiento::find($id);
            return view('requerimiento.show', compact('requerimiento', 'sectores'));
    }

    public function edit($id){
        $estados = Estadorequerimiento::pluck('estado','id');   
        $sectores = sectore::all('sectores');
        $requerimiento = Requerimiento::find($id);
            return view('requerimiento.edit', compact('requerimiento','sectores','estados'));
    }

    public function update(Request $request, Requerimiento $requerimiento){
        request()->validate(Requerimiento::$rules);
        $requerimiento->update($request->all());
            return redirect()->route('requerimientos.index')
                ->with('success', 'Requerimiento updated successfully');
    }

    public function destroy($id){
        $requerimiento = Requerimiento::find($id)->delete();
            return redirect()->route('requerimientos.index')
                ->with('success', 'Requerimiento deleted successfully');
    }
}
