<?php

namespace App\Http\Controllers;

use App\Models\Rdps;
use Illuminate\Http\Request;

class RdpsController extends Controller
{
    public function index()
    {
        return view('Rdps.index',[
            'rdps' => Rdps::paginate(5),
        ]);
    }

    public function create()
    {
        return view('rdps.create');
    }

    public function store(Request $request)
    {
        $rdp = new Rdps();
        $rdp->rdp = $request->rdp;
        $rdp->username = $request->username;
        $rdp->password = $request->password;
        $rdp->guranteed = $request->guranteed;
        $rdp->access = $request->access;
        $rdp->source = $request->source;
        $rdp->os = $request->os;
        $rdp->rams = $request->rams;
        $rdp->price = $request->price;
        $rdp->save();
        return redirect()->route('rdps.index');
    }

    public function show(Rdps $rdps)
    {

    }

    public function edit(Rdps $rdp)
    {
        return view('rdps.edit', ['rdps' => $rdp]);
    }

    public function update(Request $request, Rdps $rdp)
    {
        $rdp->rdp = $request->rdp;
        $rdp->guranteed = $request->guranteed;
        $rdp->access = $request->access;
        $rdp->source = $request->source;
        $rdp->os = $request->os;
        $rdp->rams = $request->rams;
        $rdp->price = $request->price;
        $rdp->save();
        return redirect()->route('rdps.index');
    }

    public function destroy(Request $request, Rdps $rdp)
    {
        $rdp->delete();
        return redirect()->route('rdps.index');
    }
}
