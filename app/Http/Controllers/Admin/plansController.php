<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cartoes\exchangeRate;
use App\Models\Plans;


class plansController extends Controller {

    public function index() {

        $moeda = exchangeRate::converCurrency('USD');
        $p = Plans::paginate(10);
        return view('admin.plans.index')->with(['dolar'=>$moeda, 'plans'=>$p]);

    }

    public function create() {
         return view('admin.plans.create');
    }

    public function store(Request $request) {

        $p = new Plans();
        $p->name = $request->name;
        $p->period = $request->period;
        $p->currency = $request->currency;
        $p->value = $request->value;
        $p->description = $request->description;
        $p->active = true;
        $p->save();

        $request->session()->flash('alert-success', 'Cliente cadastrado com sucesso.');

        return redirect('admin/plans/');
    }

    public function edit ($id) {
       
       $row = Plans::find($id);
       return view('admin.plans.edit')->with(['row'=>$row]);

    }

    public function update(Request $request, $id) {

        $p = Plans::find($id);
        $p->name = $request->name;
        $p->period = $request->period;
        $p->currency = $request->currency;
        $p->value = $request->value;
        $p->description = $request->description;
        $p->active = $request->active;
        $p->save();

        $request->session()->flash('alert-success', 'Cliente cadastrado com sucesso.');

        return redirect('admin/plans/');

    }

    public function enamble($id) {
        $p = Plans::find($id);
        $p->active = 1;
        $p->save();

        return redirect('admin/plans/');
    }

    public function disable($id) {

        $p = Plans::find($id);
        $p->active = 0;
        $p->save();

        return redirect('admin/plans/');
    }

    public function destroy($id) {

        $p = Plans::find($id);
        $p->delete();
        return redirect('admin/plans/');
    }
    
}
