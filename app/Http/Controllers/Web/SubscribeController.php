<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Models\Plans;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $plans = Plans::where('active',1)->orderBy('id', 'desc')->get();
        $mensalValue = Plans::where('name','Mensal')->get();
        $mensalValue = $mensalValue[0]->value;
        $countries = \App\Models\Country::lists('name', 'id');

        return view('web.subscribe')->with(['plans' => $plans, 'mensalValue' => $mensalValue, 'countries' => $countries, 'promo' => '']);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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


    public function promo($id){

        $promo = \App\Models\Promotions::find($id)->get();

        $plans = Plans::where('active',1)->orderBy('id', 'desc')->get();
        $mensalValue = Plans::where('name','Mensal')->get();
        $mensalValue = $mensalValue[0]->value;
        $countries = \App\Models\Country::lists('name', 'id');

        return view('web.subscribe')->with(['plans' => $plans, 'mensalValue' => $mensalValue, 'countries' => $countries, 'promo' => $promo]);
    }
}
