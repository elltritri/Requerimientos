<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __contruct(){
        $this->middleware('can:admin.user.index')->only('index');
        $this->middleware('can:admin.user.edit')->only('edit','update');
    }

    public function index(){
        return view('user.index');
        }

    public function edit(user $user){
        $roles = Role::all();
        return view('user.edit', compact('user','roles'));
        }
   
    public function update(Request $request, user $user){
        $user->roles()->sync($request->roles);
        return redirect()->route('users.edit', $user)->with('info','Se asigno correctamente');
        }
}
