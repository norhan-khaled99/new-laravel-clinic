<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Session;
use App\Models\Patient;
use App\Models\Doctor;

class SessionController extends Controller
{
    public function index()
    {
        $sessions=Session::all();
        return view('sessions.index',compact('sessions'));
    }
//    public function create()
//    {
//        $patients = Patient::all(); // Fetch all patients (adjust this query as needed)
//
//        return view('sessions.create', ['patients' => $patients]);
////        return view('sessions.create');
//    }
    public function create()
    {
        $patients = Patient::all();
        $doctors = Doctor::all();

        return view('sessions.create', compact('patients', 'doctors'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'session_date' => 'required|date',
            'session_number' => 'required|integer|min:1',
            'doctor_id' => 'required|exists:doctors,id',
            'diagnosis' => 'required|string',
        ]);

        Session::create($data);
        return redirect()->route('sessions.index')->with('success', 'Patient added successfully!');    }
    public function delete($id)
    {
        $session = Session::find($id);
        if (!$session) {
            return redirect()->route('sessions.index')->with('error', 'Session not found.');
        }
        $session->delete();
        return redirect()->route('sessions.index')->with('success', 'Session deleted successfully.');
    }

    public function edit($id)
    {
        $session=Session::find($id);
        if (!$session) {
            return redirect()->route('sessions.index')->with('error', 'Session not found.');
        }
        return view('sessions.edit', ['session' => $session]);

    }
    public function update(Request $request , $id)
    {
        return view();
    }
}
