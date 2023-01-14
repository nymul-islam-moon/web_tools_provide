<?php

namespace App\Http\Controllers;

use App\Http\Requests\Cpanel\CreateCpanelRequest;
use App\Http\Requests\Cpanel\UpdateCpanelRequest;
use App\Models\Cpanel;
use Illuminate\Http\Request;

class CpanelsController extends Controller
{

    public function index()
    {
        $cpanels = Cpanel::latest()->paginate(5);

        return view('cpanel.index', compact('cpanels'));
    }

    public function store(CreateCpanelRequest $request)
    {
        $formdata = $request->validated();
        Cpanel::create($formdata);
        return back()->with('create', 'Cpanel created successfully');
    }

    public function edit(Cpanel $cpanel)
    {
        return view('cpanel.edit', compact('cpanel'));
    }

    public function update(UpdateCpanelRequest $request, Cpanel $cpanel)
    {
        $formdata = $request->validated();
        $cpanel->update($formdata);
        return back()->with('update', 'Cpanel updated successfully');
    }

    public function destroy(Cpanel $cpanel)
    {
        $cpanel->delete();
        return back()->with('destroy', 'Cpanel deleted successfully');
    }
}
