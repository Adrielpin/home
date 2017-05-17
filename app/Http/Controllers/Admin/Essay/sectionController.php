<?php

namespace App\Http\Controllers\Admin\Essay;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Storage;

use App\Models\Essay;
use App\Models\Essay_part;
use App\Models\Essay_section;
use App\Models\Essay_photo;

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
        
        $part = Essay_part::find($partid);
        return view('admin.essay.photos.parts.sections.create')->with(['essay' => $part->essay, 'part' => $part]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, $partid, Request $request)
    {

        $section = new Essay_section();
        $section->name = $request->name;
        $section->part_id = $partid;
        $section->save();

        $part = $section->part->name;        

        $files = $request->file('images');
        $thumbs = $request->file('thumbs');

        foreach ($files as $k => $file) {

            $extFile = pathinfo($file->getClientOriginalName(),PATHINFO_EXTENSION);
            $fileName = basename($file->getClientOriginalName(), '.'.$extFile);
            $fileName = hash('md5', $fileName).'.'.$extFile;



            $f = new Essay_photo();
            $f->section_id = $section->id;
            $f->file = $fileName;
            Storage::disk('public')->put('essays/'.$fileName, file_get_contents($file));

            $extFile = pathinfo($thumbs[$k]->getClientOriginalName(),PATHINFO_EXTENSION);
            $fileName = basename($thumbs[$k]->getClientOriginalName(), '.'.$extFile);
            $fileName = hash('md5', $fileName).'.'.$extFile;


            $f->thumb = $fileName;
            $f->save();

            Storage::disk('public')->put('essays/'.$fileName, file_get_contents($thumbs[$k]));

        }

        return redirect()->route('admin.essay.show.photos.parts.edit', [$id, $partid]);
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
        $section = Essay_section::find($sectionid);
        $part = $section->part;
        $essay = $part->essay;

        return view('admin.essay.photos.parts.sections.edit')->with(['essay' => $essay, 'part' => $part, 'section' => $section ]);
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
