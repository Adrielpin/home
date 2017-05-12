<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Promotions;
use App\Models\Aplication;

class promotionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $p = Promotions::paginate(10);
        return view('admin.promotions.index')->with(['promotions'=>$p]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aplications = Aplication::lists('name','id');
        return view('admin.promotions.create')->with(['aplications'=>$aplications]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $p =  new Promotions();
        $p->aplication_id = $request->aplication;
        $p->name = $request->name;
        $p->discount = $request->discount;
        $p->period = $request->period;
        $p->file = $request->file;
        $p->active = $request->active;
        $p->save();

         $request->session()->flash('alert-success', 'Cliente cadastrado com sucesso.');

        return redirect('admin/promotions/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $p =  Promotions::find($id);
        $aplications = Aplication::lists('name','id');

        return view('admin.promotions.edit')->with(['promotion' => $p, 'aplications' => $aplications]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $p =  Promotions::find($id);
        $p->aplication_id = $request->aplication;
        $p->name = $request->name;
        $p->discount = $request->discount;
        $p->period = $request->period;
        $p->file = $request->file;
        $p->active = $request->active;
        $p->save();

         $request->session()->flash('alert-success', 'Cliente cadastrado com sucesso.');

        return redirect('admin/promotions/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p = Promotions::find($id);
        $p->delete();

        Session::flash('message', 'Usuario removido!');

        return redirect('admin/usuarios/');
    }
}
