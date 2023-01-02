<?php

namespace App\Http\Controllers;

use App\Models\Lufix;
use Illuminate\Http\Request;

class LufixController extends Controller
{
    public function lufixIndex(Request $request)
    {
        $lufix = Lufix::all();
        return view('Lufix.lufix', [
            'lufixes' => Lufix::all()
        ]);
    }

    public function saveLufix(Request $request)
    {
        Lufix::saveLufix($request);
        return redirect(route('lufix'));
    }

    public function deleteLufix(Request $request)
    {
        $lufix = Lufix::find($request->lufix_id);
        $lufix->delete();
        return back();
    }

    public function editLufix($id)
    {
        return view('Lufix.edit-lufix', [
            'lufixes' => Lufix::find($id)
        ]);
    }

    public function updateLufix(Request $request)
    {
        Lufix::updateLufix($request);
        return redirect(route('lufix'));
    }
}
