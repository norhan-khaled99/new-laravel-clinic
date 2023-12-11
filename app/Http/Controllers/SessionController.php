<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index()
    {
        return view('sessions.index');
    }
    public function create()
    {
        return view('sessions.create');
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
