<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use Illuminate\Contracts\View\View;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::get();
        return view('patient.index',compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('patient.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:255|string',
            'age'=>'required|integer',
            'contactNumber'=>'required|max:15|string',
            'address'=>'required|max:255|string',
            'dentalHistory'=>'required'
        ]);
        Patient::create([
            'name' => $request -> name,
            'age' => $request -> age,
            'contactNumber' => $request -> contactNumber,
            'address' => $request -> address,
            'dentalHistory' => $request -> dentalHistory,
        ]);
        return redirect('patients/create')->with('status', 'Patient Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
