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

        return redirect()->route('patients.create')->with('success', 'Patient added successfully!');
    }

    public function index()
    {
        // $patients = Patient::all();
        return view('patients.index');
    }


    public function delete($id)
    {
        return view();
    }
    public function edit($id)
    {
        return view();
    }
    public function update(Request $request )
    {
        return view();
    }

}
