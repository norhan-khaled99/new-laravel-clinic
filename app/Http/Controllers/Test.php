<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller
{
    public function index()
    {
        return response()->json(['message' => 'Success'], 200);

    }
}
