<?php

namespace App\Http\Controllers;

use App\Models\Cpanels;
use Illuminate\Http\Request;

class CpanelsController extends Controller
{

    public function index()
    {
        return view('Cpanels.index',[
            'cpanels' => Cpanels::paginate(5),
        ]);
    }

    public function create()
    {
        return view('cpanels.create');
    }

    public function store(Request $request)
    {
        $cpanel = new Cpanels();
        $cpanel->cpanel = $request->cpanel;
        $cpanel->username = $request->username;
        $cpanel->password = $request->password;
        $cpanel->source = $request->source;
        $cpanel->price = $request->price;
        $cpanel->save();
        return redirect()->route('cpanels.index');
    }

    public function show(Cpanels $cpanels)
    {

    }

    public function edit(Cpanels $cpanel)
    {
        return view('cpanels.edit', ['cpanels' => $cpanel]);
    }

    public function update(Request $request, Cpanels $cpanel)
    {
        $cpanel->cpanel = $request->cpanel;
        $cpanel->source = $request->source;
        $cpanel->price = $request->price;
        $cpanel->save();
        return redirect()->route('cpanels.index');
    }

    public function destroy(Request $request, Cpanels $cpanel)
    {
        $cpanel->delete();
        return redirect()->route('cpanels.index');
    }
}
