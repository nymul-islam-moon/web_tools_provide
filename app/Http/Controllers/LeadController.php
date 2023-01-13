<?php

namespace App\Http\Controllers;

use App\Http\Requests\Lead\LeadCreateRequest;
use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function lead()
    {
        return view('lead.index-lead',[
            'leads' => Lead::paginate(5),
        ]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'link' => 'required',
            'phone_number' => 'required',
            'type' => 'required',
            'provider' => 'required',
            'proof' => 'required',
            'country' => 'required',
            'price' => 'required',
        ]);

        $lead = new Lead();
        $lead->link = $request->link;
        $lead->phone_number = $request->phone_number;
        $lead->type = $request->type;
        $lead->provider = $request->provider;
        $lead->proof = $request->proof;
        $lead->price = $request->price;
        $lead->status = $request->status ? 1:0;
        $lead->country = $request->country;
        $lead->description = $request->description;
        $lead->additional_information = $request->additional_information;
        $lead->save();
        return back();
    }

    // public function deleteLead($id)
    // {
    //     $this->lead = Lead::find($id);
    //     $this->lead->delete();
    //     return back();
    // }

    // public function editLead($id)
    // {
    //     $this->lead = Lead::find($id);
    //     return view('lead.edit-lead',[
    //         'lead' => $this->lead,
    //     ]);
    // }

    // public function saveEditLead(Request $request)
    // {
    //     $request->validate([
    //         'download_link' => 'required',
    //         'number' => 'required',
    //         'type' => 'required',
    //         'provider' => 'required',
    //         'description' => 'required',
    //         'proof' => 'required',
    //         'country' => 'required',
    //         'price' => 'required',
    //     ]);
    //     Lead::saveEditLead($request);
    //     return redirect(route('lead'));
    // }
}
