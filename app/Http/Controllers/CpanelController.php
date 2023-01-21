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

        return view('MyProducts.cpanel.index', compact('cpanels'));
    }

    public function create()
    {
        return view('MyProducts.cpanel.create');
    }

    public function store(CreateCpanelRequest $request)
    {
        $formdata = $request->validated();
        $formdata['cpanel'] = 'test_cpanel';
        $formdata['country'] = 'test_country';
        $formdata['seo_rank'] = 'test_seo_rank';
        $formdata['status'] = 0;
        Cpanel::create($formdata);
        return redirect()->route('cpanel.index')->with('create', 'Cpanel created successfully');
    }

    public function edit(Cpanel $cpanel)
    {
        return view('MyProducts.cpanel.edit', compact('cpanel'));
    }

    public function update(UpdateCpanelRequest $request, Cpanel $cpanel)
    {
        $formdata = $request->validated();
        $cpanel->update($formdata);
        return redirect()->route('cpanel.index')->with('update', 'Cpanel updated successfully');
    }

    public function destroy(Cpanel $cpanel)
    {
        $cpanel->delete();
        return redirect()->route('cpanel.index')->with('destroy', 'Cpanel deleted successfully');
    }
}
