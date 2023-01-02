<?php

namespace App\Http\Controllers;

use App\Models\SshWhms;
use Illuminate\Http\Request;

class SshWhmsController extends Controller
{

    public function index()
    {
        return view('sshwhm.index',[
            'sshwhms' => SshWhms::all(),  ]);
    }

    public function create()
    {
        return view('sshwhm.create');
    }

    public function store(Request $request)
    {
        $sshwhm = new SshWhms();
        $sshwhm->ssh = $request->ssh;
        $sshwhm->username = $request->username;
        $sshwhm->password = $request->password;
        $sshwhm->price = $request->price;
        $sshwhm->save();
        return redirect()->route('sshwhm.index');
    }

    public function show(SshWhms $sshWhm)
    {

    }

    public function edit(SshWhms $sshwhm)
    {
        return view('sshwhm.edit', ['sshwhms' => $sshwhm]);
    }

    public function update(Request $request, SshWhms $sshwhm)
    {
        $sshwhm->ssh = $request->ssh;
        $sshwhm->price = $request->price;
        $sshwhm->save();
        return redirect()->route('sshwhm.index');
    }

    public function destroy(Request $request, SshWhms $sshwhm)
    {
        $sshwhm->delete();
        return redirect()->route('sshwhm.index');
    }
}
