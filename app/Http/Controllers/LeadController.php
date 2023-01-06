<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public $lead;
    public function lead()
    {
        return view('lead.index-lead',[
            'leads' => Lead::all(),
        ]);
    }

    public function saveLead(Request $request)
    {
        $request->validate([
            'download_link' => 'required',
            'number' => 'required',
            'type' => 'required',
            'provider' => 'required',
            'description' => 'required',
            'proof' => 'required',
            'country' => 'required',
            'price' => 'required',
        ]);
        Lead::saveLead($request);
        return back();
    }

    public function deleteLead($id)
    {
        $this->lead = Lead::find($id);
        $this->lead->delete();
        return back();
    }

    public function editLead($id)
    {
        $this->lead = Lead::find($id);
        return view('lead.edit-lead',[
            'lead' => $this->lead,
        ]);
    }

    public function saveEditLead(Request $request)
    {
        Lead::saveEditLead($request);
        return redirect(route('lead'));
    }
}
