<?php

namespace App\Http\Controllers;

use App\Http\Requests\Lead\CreateLeadRequest;
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

    public function create(CreateLeadRequest $request)
    {
        $formdata = $request->validated();
        $formdata['status'] = 0;
        Lead::create($formdata);
        return back()->with('create', 'Lead created successfully');
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
