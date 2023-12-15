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
