<?php

namespace App\Http\Controllers\Admin\Essay;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests;

use Session;
use Storage;
use App\Models\Essay_model;

class ModelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $models = Essay_model::all();

        return view('admin.essay.models.index')->with(['models' => $models]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('admin.essay.models.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Essay_model();
        $model->name = $request->name;
        $model->email = $request->email;

        $file = $request->file('image');

        $name =date('Y_m_d_His').'_'.$file->getClientOriginalName();
        $model->image = $name;
        $model->save();

        Storage::disk('public')->put('models/' .  $name, file_get_contents($file));

        $request->session()->flash('alert-success', 'Modelo adicionada com sucesso.');


        return redirect('admin/essay/models/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Essay_model::find($id);
        return view('admin.essay.models.edit')->with(['model'=>$model]);
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

       $model = Essay_model::find($id);
       $model->name = $request->name;
       $model->email = $request->email;

       $file = $request->file('image');

       Storage::disk('public')->delete('models/'.$model->image);

       $name =date('Y_m_d_His').'_'.$file->getClientOriginalName();
       $model->image = $name;
       $model->save();

       Storage::disk('public')->put('models/' .  $name, file_get_contents($file));

       $request->session()->flash('alert-success', 'Modelo adicionada com sucesso.');


       return redirect('admin/essay/models/');

   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $model = Essay_model::find($id);
     Storage::disk('public')->delete('models/'.$model->image);
     $model->delete();
     return redirect('admin/essay/models/');
 }

}
