<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index()
    {
        // return response()->json(['message' => 'Success'], 200);

        return view('sessions.index');
    }
    public function create()
    {
        return view();
    }

    public function store()
    {
        return view();
    }
    public function delete($id)
    {
        return view();
    }
    public function edit($id)
    {
        return view();
    }
    public function update(Request $request)
    {
        return view();
    }
}
