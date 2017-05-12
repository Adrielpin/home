<?php

namespace App\Http\Controllers\Admin\Essay;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Storage;
use App\Models\Essay; 
use App\Models\Essay_parts;

class partsController extends Controller
{

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function index($id)
        {
            $part = Essay_parts::find($id);
            return view('admin.ensaios.fotos.partes.index')->with(['part' => $part]);
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create($id)
    {
        $essay = Essay::find($id);
        return view('admin.ensaios.fotos.partes.create')->with(['essay' => $essay]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {

        $part = new Essay_parts();
        $part->name = $request->name;
        $part->essay_id = $id;
        $part->save();

        $folder = 'essays/'.$part->essay->name.'/'.$part->name;

        Storage::disk('public')->makeDirectory($folder);
        
        return redirect()->route('admin.essay.photos.index', ['id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $partid)
    {
      $essay = Essay::find($id);
      $part = Essay_parts::find($partid);
      return view('admin.ensaios.fotos.partes.edit')->with(['essay' => $essay, 'part' => $part]);
  }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $partid)
    {
        $part = Essay_parts::find($partid);
        $part->name = $request->name;
        $part->save();

        return redirect()->route('admin.essay.photos.index', ['id' => $id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $partid)
    {
        Essay_parts::find($partid)->delete();

        return redirect()->route('admin.essay.photos.index', ['id' => $id]);
    }
}
