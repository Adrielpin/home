<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
    	$essays = \App\Models\Essay::orderBy('created_at','dec')->limit(3)->get();
    	// dd($essays);

        return view('web.home.index')->with(['essays' => $essays]);
    }
}
