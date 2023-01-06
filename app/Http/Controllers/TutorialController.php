<?php

namespace App\Http\Controllers;

use App\Models\Tutorial;
use Illuminate\Http\Request;

class TutorialController extends Controller
{
    public function tutorialIndex(Request $request)
    {
        $tutorial = Tutorial::all();
        return view('Tutorial.tutorial', [
            'tutorials' => Tutorial::paginate(5),
        ]);
    }

    public function saveTutorial(Request $request)
    {
        Tutorial::saveTutorial($request);
        return redirect(route('tutorial'));
    }

    public function deleteTutorial(Request $request)
    {
        $tutorial = Tutorial::find($request->tutorial_id);
        $tutorial->delete();
        return back();
    }

    public function editTutorial($id)
    {
        return view('Tutorial.edit-tutorial', [
            'tutorials' => Tutorial::find($id)
        ]);
    }

    public function updateTutorial(Request $request)
    {
        Tutorial::updateTutorial($request);
        return redirect(route('tutorial'));
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
     * @param \App\Models\Tutorial $tutorial
     * @return \Illuminate\Http\Response
     */
    public function show(Tutorial $tutorial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Tutorial $tutorial
     * @return \Illuminate\Http\Response
     */
    public function edit(Tutorial $tutorial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Tutorial $tutorial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tutorial $tutorial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Tutorial $tutorial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tutorial $tutorial)
    {
        //
    }
}
