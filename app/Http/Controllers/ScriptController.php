<?php

namespace App\Http\Controllers;

use App\Models\Script;
use Illuminate\Http\Request;

class ScriptController extends Controller
{
    public function scriptIndex(Request $request)
    {
        $script = Script::all();
        return view('Script.script', [
            'scripts' => Script::paginate(5),
        ]);
    }

    public function saveScript(Request $request)
    {
        Script::saveScript($request);
        return redirect(route('script'));
    }

    public function deleteScript(Request $request)
    {
        $script = Script::find($request->script_id);
        $script->delete();
        return back();
    }

    public function editScript($id)
    {
        return view('Script.edit-script', [
            'scripts' => Script::find($id)
        ]);
    }

    public function updateScript(Request $request)
    {
        Script::updateScript($request);
        return redirect(route('script'));
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Script $script
     * @return \Illuminate\Http\Response
     */
    public function show(Script $script)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Script $script
     * @return \Illuminate\Http\Response
     */
    public function edit(Script $script)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Script $script
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Script $script)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Script $script
     * @return \Illuminate\Http\Response
     */
    public function destroy(Script $script)
    {
        //
    }
}
