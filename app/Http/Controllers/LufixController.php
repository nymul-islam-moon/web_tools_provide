<?php

namespace App\Http\Controllers;

use App\Models\Lufix;
use Illuminate\Http\Request;

class LufixController extends Controller
{
    public function index(Request $request)
    {
        $lufix = Lufix::all();
        return view('Lufix.index', compact('lufix'));
    }
}
