<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Essay_cameramen;

use Session;

class FilmingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$cameramans = Essay_cameramen::all();
    	return view('admin.ensaios.filmagem.index')->with(['cameramans' => $cameramans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return view('admin.ensaios.filmagem.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$d = new Essay_cameramen();
    	$d->name = $request->name;
    	$d->save();

    	Session::flash('message', 'Cameraman inserido com sucesso!'); 
    	Session::flash('alert-class', 'alert-success'); 
    	
    	return redirect()->route('admin.essay.filming.index');
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
    	$cameraman = Essay_cameramen::find($id);
    	return view('admin.ensaios.filmagem.edit')->with(['cameraman' => $cameraman]);
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
    	$d = Essay_cameramen::find($id);
    	$d->name = $request->name;
    	$d->save();

    	return redirect()->route('admin.essay.filming.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	$d = Essay_cameramen::find($id);
    	$d->delete();

    	Session::flash('message', 'Cameraman removido com sucesso!'); 
    	Session::flash('alert-class', 'alert-info'); 

    	return redirect()->route('admin.essay.filming.index');
    }
}
