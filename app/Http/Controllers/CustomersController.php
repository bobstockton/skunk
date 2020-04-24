<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the users list.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $customers = Customer::all();
        return view('dashboard.customers.customersList', compact('customers'));
    }

    /**
     *  Remove customer
     *
     *  @param int $id
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function remove( $id )
    {
        $customer = Customer::find($id);
        if($customer){
            $customer->delete();
        }
        return redirect()->route('adminCustomers');
    }

    /**
     *  Show the form for editing the customer.
     *
     *  @param int $id
     *  @return \Illuminate\Contracts\Support\Renderable
     */
    public function editForm( $id )
    {
        $customer = Customer::find($id);
        return view('dashboard.admin.customerEditForm', compact('customer'));
    }

    public function edit(){

    }

}
