<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use App\Models\User_level;

use Hash;
use Session;

class UsersController extends Controller {

    

    public function index () {   

        $rows = User::all();

        return view('admin.usuarios.index')->with(['rows'=>$rows]);
    }

    public function create() {

        $tipos = User_level::all();

        foreach ($tipos as $tipo) {
            $type[$tipo->id] = $tipo->name;
        }

        return view('admin.usuarios.create')->with(['tipos'=>$type]);
    }

    public function store (Request $request) {

        $u = new User();
        $u->name = $request->name;
        $u->email = $request->email;
        $u->password = Hash::make($request->senha);
        $u->level = $request->tipos;
        $u->save();

        $request->session()->flash('alert-success', 'Usuário cadastrado com sucesso.');

        return redirect('admin/usuarios/');
    }

    public function edit ($id) {
       
       $row = User::find($id);

       $tipos = User_level::all();
        foreach ($tipos as $tipo) {
            $type[$tipo->id] = $tipo->name;
        }
       return view('admin.usuarios.edit')->with(['row'=>$row, 'tipos'=>$type]);

    }

    public function update (Request $request, $id) {
        
        $u = User::find($id);
        $u->name = $request->name;
        $u->email = $request->email;
        $u->level = $request->tipos;
        $u->save();

        $request->session()->flash('alert-success', 'Usuário atualizado com sucesso.');
        return redirect('admin/usuarios/');
    }

    public function destroy ($id) {

        $u = User::find($id);
        $u->delete();

        Session::flash('message', 'Usuario removido!');

        return redirect('admin/usuarios/');
    }
}