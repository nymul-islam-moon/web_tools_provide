<?php

namespace App\Http\Controllers;

use App\Http\Requests\Cpanel\CreateCpanelRequest;
use App\Http\Requests\Cpanel\UpdateCpanelRequest;
use App\Models\Cpanel;
use Illuminate\Http\Request;

class CpanelController extends Controller
{

    public function index()
    {
        $cpanels = Cpanel::latest()->paginate(5);

        return view('cpanel.index', compact('cpanels'));
    }

    public function store(CreateCpanelRequest $request)
    {
        $formdata = $request->validated();
        $formdata['cpanel'] = 'test_cpanel';
        $formdata['country'] = 'test_country';
        $formdata['seo_rank'] = 'test_seo_rank';
        $formdata['status'] = 0;
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
        return redirect(route('cpanel.index'))->with('update', 'Cpanel updated successfully');
    }

    public function destroy(Cpanel $cpanel)
    {
        $cpanel->delete();
        return back()->with('destroy', 'Cpanel deleted successfully');
    }
}
