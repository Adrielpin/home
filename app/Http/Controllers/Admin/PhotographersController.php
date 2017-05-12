<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Essay_photographer;

class PhotographersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$photographers = Essay_photographer::all();
    	return view('admin.ensaios.fotografos.index')->with(['photographers' => $photographers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return view('admin.ensaios.fotografos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$d = new Essay_photographer();
    	$d->name = $request->name;
    	$d->save();

    	Session::flash('message', 'Fotografo inserido com sucesso!'); 
    	Session::flash('alert-class', 'alert-success'); 
    	
    	return redirect()->route('admin.essay.photographers.index');
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
    	$photographer = Essay_photographer::find($id);
    	return view('admin.ensaios.fotografos.edit')->with(['photographer' => $photographer]);
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
    	$d = Essay_photographer::find($id);
    	$d->name = $request->name;
    	$d->save();

    	return redirect()->route('admin.essay.photographers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	$d = Essay_photographer::find($id);
    	$d->delete();

    	Session::flash('message', 'Fotografo removido com sucesso!'); 
    	Session::flash('alert-class', 'alert-info'); 

    	return redirect()->route('admin.essay.photographers.index');
    }
}
