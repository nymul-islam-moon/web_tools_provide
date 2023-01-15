<?php

namespace App\Http\Controllers;

use App\Http\Requests\Lead\LeadCreateRequest;
use App\Http\Requests\Lead\UpdateLeadRequest;
use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function index()
    {
        $leads = Lead::paginate(5);
        return view('lead.index', compact('leads'));
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



    public function edit(Lead $lead)
    {
        return view('lead.edit', compact('lead'));
    }

    public function update(UpdateLeadRequest $request, Lead $lead)
    {
        $formdata = $request->validated($request);
        $lead->update($formdata);
        return redirect(route('lead.index'))->with('update', 'Lead updated successfully');
    }


    public function destroy(Lead $lead)
    {
        $lead->delete();
        return back()->with('destroy', 'Lead deleted successfully');
    }

}
