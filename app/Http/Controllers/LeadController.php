<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function lead()
    {
        return view('lead.index-lead',[
            'leads' => Lead::all(),
        ]);
    }
}
