<?php

namespace App\Http\Controllers\Admin\Essay;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Session;
use App\Models\Essay;
use App\Models\Essay_profiles;

class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $essay = Essay::find($id);
        return view('admin.ensaios.perfis.index')->with(['essay' => $essay]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $essay = Essay::find($id);
        return view('admin.ensaios.perfis.create')->with(['essay' => $essay]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {


        $profile = new Essay_profiles();
        $profile->description = $request->description;
        $profile->profile = $request->conteudo;
        $profile->save();

        $essay = Essay::find($id);
        $essay->profile_id = $profile->id;
        $essay->save();

        Session::flash('message', 'Perfil adicionado!');

        return redirect()->route('admin.essay.profile.index', [$essay->id]);

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
    public function edit($id, $profile)
    {
        $essay = Essay::find($id);
        return view('admin.ensaios.perfis.edit')->with(['essay' => $essay]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $profileid)
    {
        $profile =  Essay_profiles::find($profileid);
        $profile->description = $request->description;
        $profile->profile = $request->conteudo;
        $profile->save();

        Session::flash('message', 'Perfil editado!');

        return redirect()->route('admin.essay.profile.index', [$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $profileid)
    {
        $profile = Essay_profiles::find($profileid)->delete();

        Session::flash('message', 'Perfil removido!');

        return redirect()->route('admin.essay.profile.index', [$id]);
    }
}
