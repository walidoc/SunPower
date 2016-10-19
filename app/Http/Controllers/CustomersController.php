<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use App\Customer;

class CustomersController extends Controller
{
    
    public function index()
    {
        $customers = Customer::orderBy('created_at', 'asc')->get();
        return view('customers', [
            'customers' => $customers
        ]);
            
    }

  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
        'fullname' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/getStarted')
                ->withInput()
                ->withErrors($validator);
        } 

        $customer = new Customer;
        $customer->name = $request->fullname;
        $customer->tel = $request->tel;
        $customer->email = $request->email;
        $customer->gouvernorat = $request->gov;
        $customer->address = $request->address;
        $customer->zipcode = $request->zip;
        $customer->save();

        \Session::flash('flash_message', 'Your request has been registred, we will call you later');

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function show($id)
    {
        $customer = Customer::where('id', '=', $id)->get();

        return view('showCustomer',[
            'customer' => $customer
        ]);
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::where('id', '=', $id)->get();

        return view('editCustomer',[
            'customer' => $customer
        ]);
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
        $customer = Customer::where('id', '=', $id)->get();

        $customer[0]->name         =   $request->fullname;
        $customer[0]->tel          =   $request->tel;
        $customer[0]->email        =   $request->email;
        $customer[0]->gouvernorat  =   $request->gov;
        $customer[0]->address      =   $request->address;
        $customer[0]->zipcode      =   $request->zip;

        $customer[0]->save();

        return redirect('/customers');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $customer = Customer::where('id', '=', $id)->get();

        return view('deleteCustomer',[
            'customer' => $customer
        ]);
    }
}







