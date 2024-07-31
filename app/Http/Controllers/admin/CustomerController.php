<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use function Laravel\Prompts\alert;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();
        return view('admin.customers.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
        $request->validate([
            'name'=>'required',
            'national_code'=>'required',
        ]);

        Customer::create([
            'name'=>$request->name,
            'national_code'=>$request->national_code,
            'type'=>$request->type,
            'mobile'=>$request->mobile,
            'phone'=>$request->phone,
            'state'=>$request->state,
            'city'=>$request->city,
            'address'=>$request->address,
            'zipcode'=>$request->zipcode,
            'desc'=>$request->desc,
        ]);
       
        return redirect()->route('admin.customers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        return view('admin.customers.show',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return view('admin.customers.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'name'=>'required',
            'national_code'=>'required',
        ]);

            $customer->update([
                'name'=>$request->name,
                'national_code'=>$request->national_code,
                'type'=>$request->type,
                'mobile'=>$request->mobile,
                'phone'=>$request->phone,
                'state'=>$request->state,
                'city'=>$request->city,
                'address'=>$request->address,
                'zipcode'=>$request->zipcode,
                'desc'=>$request->desc,
            ]);
        return redirect()->route('admin.customers.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('admin.customers.index');
    }
}
