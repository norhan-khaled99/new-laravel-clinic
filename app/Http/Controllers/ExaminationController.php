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
        $examination=Examination::all();
        return view('examinations.index',compact('examination'));
    }
    public function create()
    {
        $patients = Patient::all();
        return view('examinations.create', compact('patients'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $data = $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'follow' => 'required|string',
        ]);

        $examination = Examination::create($data);

        // Redirect to a specific route or view
        return redirect()->route('examination.index')->with('success', 'Examination added successfully!');
    }
    public function delete($id)
    {
        $examination=Examination::find();
        if(!$examination){
            return redirect()->route('examination.index')->with('error', 'Session not found.');
        }
        $examination->delete();
        return redirect()->route('examination.index')->with('success', 'Session deleted successfully.');
    }
    public function edit($id)
    {
        $examination=Examination::find($id);
        return view('examinations.edit',compact('examination'));
    }
    public function update(Request $request ,$id)
    {
        $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'follow' => 'required|string',
        ]);
        $examination = Examination::find($id);
        $examination->update($request->all());

        return redirect()->route('examination.index')->with('success', 'Examination updated successfully!');
    }

}
