<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use Illuminate\Support\Facades\Validator;


class PatientController extends Controller
{

    public function create()
    {
        return view('patients.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'age' => 'required|integer',
            'phone_number' => 'required|string',
            'chronic_diseases' => 'nullable|string',
            'ct' => 'required|in:yes,no',
        ]);

        Patient::create($data);

        return redirect()->route('patients.index')->with('success', 'Patient added successfully!');
    }

    public function index(Request $request)
    {
        $search = $request->input('search');

        $patients = Patient::when($search, function ($query) use ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        })->get();

        return view('patients.index', ['patients' => $patients]);

    }


    public function delete($id)
    {
        $patient=Patient::find();
        if(!$patient){
            return  redirect()->route('patients.index') ->with('error', 'patient is not found.') ;
        }
        return  redirect()->route('patients.index') ->with('success', 'Patient deleted successfully.');

    }
    public function edit($id)
    {
        $patient=Patient::find();
        return view('patients.edit',compact('patient'));
    }

    public function update(Request $request ,$id)
    {
        $request->validate([
            'name' => 'required|string',
            'age' => 'required|integer',
            'phone_number' => 'required|string',
            'chronic_diseases' => 'nullable|string',
            'ct' => 'required|in:yes,no',
        ]);

        $patient = Patient::find($id);
        $patient->update($request->all());

        return redirect()->route('patients.index')->with('success', 'Patient updated successfully!');

    }

}
