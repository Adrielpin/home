<?php

namespace App\Http\Controllers\Admin\Essay;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Storage;
use App\Models\Essay;
use App\Models\Essay_parts;
use App\Models\Essay_sections;
use App\Models\Essay_files;

class sectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id, $partid)
    {
        $essay = Essay::find($id);
        $part = Essay_parts::find($partid);
        return view('admin.ensaios.fotos.sections.index')->with(['essay' => $essay, 'part' => $part]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id, $partid)
    {   
        $essay = Essay::find($id);
        $part = Essay_parts::find($partid);
        return view('admin.ensaios.fotos.sections.create')->with(['essay' => $essay, 'part' => $part]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, $partid, Request $request)
    {

        $section = new Essay_sections();
        $section->name = $request->name;
        $section->part_id = $partid;
        $section->active = $request->active;
        $section->save();

        $essay = Essay_sections::find($section->id)->part->essay->name;

        $part = $section->part->name;
        

        $folder = $essay.'/'.$part.'/'.$section->name;

        $files = $request->file('images');

        foreach ($files as $k => $file) {
            $name = date('usiHdmY').$file->getClientOriginalName();
            $f = new Essay_files();
            $f->section_id = $section->id;
            $f->name = $name;
            $f->save();

            Storage::disk('public')->put('essays/'.$folder.'/'.$name, file_get_contents($file));

        }

        $request->session()->flash('alert-success', 'Artigo cadastrado com sucesso.');

        return redirect()->route ('admin.essay.photos.parts.edit', [$id, $partid]);
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
    public function edit($id, $partid, $sectionid)
    {   
        $section = Essay_sections::find($sectionid);
        $part = $section->part;
        $essay = $part->essay;

        return view('admin.ensaios.fotos.sections.edit')->with(['essay' => $essay, 'part' => $part, 'section' => $section ]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
