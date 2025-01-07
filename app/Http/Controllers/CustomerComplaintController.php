<?php

namespace App\Http\Controllers;

use App\Models\CustomerComplaint;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCustomerComplaintRequest;
use App\Http\Requests\UpdateCustomerComplaintRequest;

class CustomerComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all customer complaints from the database
        $customerComplaints = CustomerComplaint::latest()->get();
        
        // Return a JSON response with the customer complaints
        return response()->json($customerComplaints, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "sangram";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validatedData = $request->all();
    // return response()->json(['data' => $validatedData], 200);
    
    $customerComplaint = new CustomerComplaint();

    $customerComplaint->fill($validatedData);

    $customerComplaint->save();
    return view('complete');

    return response()->json(['message' => "Data inserted successfully"], 200);
}
 
    


    /**
     * Display the specified resource.
     */
    public function show(CustomerComplaint $customerComplaint)
    {
        // Return the specified customer complaint as a JSON response
        return response()->json($customerComplaint, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CustomerComplaint $customerComplaint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerComplaintRequest $request, CustomerComplaint $customerComplaint)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomerComplaint $customerComplaint)
    {
        //
    }
}
