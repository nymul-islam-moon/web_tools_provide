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
            'leads' => Lead::paginate(5),
        ]);
    }

    public function saveLead(Request $request)
    {
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
