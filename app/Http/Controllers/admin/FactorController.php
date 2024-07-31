<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Factor;
use Illuminate\Http\Request;

class FactorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $factors = Customer::all();
        return view('admin.factors.index',compact('factors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers = Customer::all();
        return view('admin.factors.create', compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            $request->validate([
                'customer_id'=>'required',
                'name'=>'required',
                'national_code'=>'required',
            ]);

            Factor::create([
                'customer_id'=>$request->customer_id,
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
            return redirect()->route('admin.factors.index');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Factor $factor)
    {
        return view('admin.factors.show',compact('factor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Factor $factor)
    {
        $customers = Customer::all();
        return view('admin.factors.edit',compact('factor',compact('customers')));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Factor $factor)
    {
        {
            $request->validate([
                'name'=>'required',
                'national_code'=>'required',
            ]);

            $factor->update([
                'factor_id'=>$request->factor_id,
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
            return redirect()->route('admin.factors.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Factor $factor)
    {
        $factor->delete();
        return redirect()->route('admin.factors.index');
    }
}
