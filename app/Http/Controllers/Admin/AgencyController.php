<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Essay_agency;

use Session;

class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$agencies = Essay_agency::all();
    	return view('admin.ensaios.agencias.index')->with(['agencies' => $agencies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return view('admin.ensaios.agencias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$d = new Essay_agency();
    	$d->name = $request->name;
    	$d->save();

    	Session::flash('message', 'Agencia inserida com sucesso!'); 
    	Session::flash('alert-class', 'alert-success'); 
    	
    	return redirect()->route('admin.essay.agency.index');
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
    	$agency = Essay_agency::find($id);
    	return view('admin.ensaios.agencias.edit')->with(['agency' => $agency]);
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
    	$d = Essay_agency::find($id);
    	$d->name = $request->name;
    	$d->save();

    	return redirect()->route('admin.essay.agency.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	$d = Essay_agency::find($id);
    	$d->delete();

    	Session::flash('message', 'Agencia removida com sucesso!'); 
    	Session::flash('alert-class', 'alert-info'); 

    	return redirect()->route('admin.essay.agency.index');
    }
}
