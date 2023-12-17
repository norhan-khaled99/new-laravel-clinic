<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;


class DoctorController extends Controller
{
    public function create()
    {
     return view('doctors.create');
    }

    public function index()
    {
        $doctor=Doctor::all();
        return view('doctors.index',compact('doctor'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string'
        ]);
        Doctor::create($request->all());
        return redirect()->route('doctors.index')->with('success', 'Doctor added successfully!');

    }

    public function edit($id)
    {
        $doctor = Doctor::find($id);
        return view('doctors.edit', compact('doctor'));
    }
    public function update(Request $request,$id)
    {

        $request->validate([
            'name' => 'required|string',
        ]);

        $doctor = Doctor::find($id);
        $doctor->update($request->all());

        return redirect()->route('doctors.index')->with('success', 'Doctor updated successfully!');

    }
    public function delete($id)
    {
        $doctor=Doctor::find($id);
        if(!$doctor){
            return redirect()->route('doctors.index')->with('error', 'doctor not found.');
        }
        $doctor->delete();
        return redirect()->route('doctors.index')->with('success', 'doctor deleted successfully.');

    }
}
