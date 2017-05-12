<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Models\User;


class CustomersController extends Controller {
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index() {

        $customers = User::where('level','2')->get();
        return view('admin.customers.index')->with(['customers' => $customers]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create() {
        return view('admin.customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request) {
        $c = new User();
        $c->first_name = $request->first_name;
        $c->last_name = $request->last_name;
        $c->email = $request->email;
        $c->country = $request->country;
        $c->birth = $request->birth;
        $c->save();

        $request->session()->flash('alert-success', 'Cliente cadastrado com sucesso.');

        return redirect('admin/customers/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {

        $customer = Customers::find($id);

        $orders = DB::table('orders')
            ->leftjoin('plans','plans_id','=','plans.id')
            ->leftjoin('promotions','promotions_id','=','promotions.id')
            ->leftjoin('order_status','order_status_id','=','order_status.id')
            ->select('orders.id','plans.name as plan','promotions.name as promotion','orders.created_at','orders.updated_at','order_status.name as status')
            ->where('customer_id','=',$id)
            ->get();

        return view('admin.customers.show')->with(['customer' => $customer, 'orders'=>$orders]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id) {
        $row = Customers::find($id);
        return view('admin.customers.edit')->with(['row'=>$row]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id) {
        
        $c = Customers::find($id);
        $c->first_name = $request->first_name;
        $c->last_name = $request->last_name;
        $c->email = $request->email;
        $c->country = $request->country;
        $c->birth = $request->birth;
        $c->save();

        $request->session()->flash('alert-success', 'Cliente atualizado com sucesso.');
        return redirect('admin/customers/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(Request $request, $id) {
        
        $c = Customers::find($id);
        $c->delete();

        return redirect('admin/customers/');

    }
}
