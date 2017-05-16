<?php

namespace App\Http\Controllers\Admin\Essay;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests;

use Storage;
use Session;

use App\Models\Essay;
use App\Models\Essay_home;

class EssayController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $essays = Essay::all();

        return view('admin.essay.index')->with(['essays' => $essays]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('admin.essay.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        $essay = $request->title;

        $e = new Essay();
        $e->name = $essay;
        $e->url = strtolower(str_replace(' ','-', $essay));
        $e->description = $request->description;
        $e->text = $request->text;
        $e->save();

        $id = $e->id;
        
        $files = $request->file('images');

        foreach ($files as $k => $file) {

            $extFile = pathinfo($file->getClientOriginalName(),PATHINFO_EXTENSION);
            $fileName = basename($file->getClientOriginalName(), '.'.$extFile);
            $fileName = hash('md5', $fileName).'.'.$extFile;

            $p = new Essay_home();
            $p->essay_id = $id;
            $p->name = $fileName;
            $p->save();

            Storage::disk('public')->put('home/' .  $fileName, file_get_contents($file));
            
        }

        return redirect('admin/essay');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $essay = Essay::find($id);
        return view('admin.essay.show')->with(['essay' => $essay]);
    }   

    /**
     * Display the specified resource.s
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {

        $essay = Essay::find($id);
        return view('admin.essay.edit')->with(['essay' => $essay]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
     $essay = Essay::find($id);
     $essay->delete();
     return redirect('admin/essay');
 }
}
