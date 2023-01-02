<?php

namespace App\Http\Controllers;

use App\Models\Shells;
use Illuminate\Http\Request;

class ShellsController extends Controller
{

    public function index()
    {
        return view('shells.index',[
            'shells' => Shells::all(),
        ]);
    }


    public function create()
    {

        return view('shells.create');

    }

    public function store(Request $request)
    {
        $shell = new Shells();
        $shell->shell = $request->shell;
        $shell->source = $request->source;
        $shell->price = $request->price;
        $shell->save();
        return redirect()->route('shells.index');
    }


    public function show(Shells $shells)
    {

    }


    public function edit(Shells $shell)
    {
        return view('shells.edit', ['shells' => $shell]);

    }

    public function update(Request $request, Shells $shell)
    {
        $shell->shell = $request->shell;
        $shell->source = $request->source;
        $shell->price = $request->price;
        $shell->save();
        return redirect()->route('shells.index');
    }


    public function destroy(Request $request, Shells $shell)
    {
        $shell->delete();
        return redirect()->route('shells.index');
    }
}
