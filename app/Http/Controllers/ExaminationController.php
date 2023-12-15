<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Examination;
use Illuminate\Support\Facades\Validator;

class ExaminationController extends Controller
{
    public function index()
    {
        // $patients = Patient::all();
        return view();
    }
    public function create()
    {
        $patients = Patient::all();

        return view('exhaminations.create', compact('patients'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $data = $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'follow' => 'required|string',
        ]);

        // Create a new Examination instance and fill it with the validated data
        $examination = Examination::create($data);

        // Redirect to a specific route or view
        return redirect()->route('examination.index')->with('success', 'Examination added successfully!');
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
