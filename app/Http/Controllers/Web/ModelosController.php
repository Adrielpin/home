<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Essay;

class ModelosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allPhotos()
    {

        $essays = Essay::paginate(24);
        $selector = Essay::pluck('name','id');

        return view('web.models.photos')->with(['essays' => $essays, 'selector' => $selector]);

    }

    public function allVideos()
    {
        $essays = Essay::paginate(24);
        $selector = Essay::lists('name','id');

        return view('web.models.videos')->with(['essays' => $essays, 'selector' => $selector]);
    }

    public function show($url)
    {
        $id = Essay::where('url','=',$url)->get();
        $id = $id[0]->id;

        return $id;
    }

    public function photo($url){
        $id = self::show($url);
        $essay = Essay::find($id);

        return view('web.models.photo')->with(['essay' => $essay]);
    }

    public function video($url){
        $id = self::show($url);
        $essay = Essay::find($id);
        return view('web.models.photo')->with(['essay' => $essay]);
    }

    public function perfil($url){
        $id = self::show($url);
        $essay = Essay::find($id);
        return view('web.models.photo')->with(['essay' => $essay]);
    }

    public function makingoff($url){
        $id = self::show($url);
        $essay = Essay::find($id);
        return view('web.models.photo')->with(['essay' => $essay]);
    }

    public function wallpaper($url){
        $id = self::show($url);
        $essay = Essay::find($id);
        return view('web.models.photo')->with(['essay' => $essay]);
    }

    public function credito($url){
        $id = self::show($url);
        $essay = Essay::find($id);
        return view('web.models.photo')->with(['essay' => $essay]);
    }

}
