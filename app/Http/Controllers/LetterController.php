<?php

namespace App\Http\Controllers;

use App\Models\Letter;
use App\Http\Requests\StoreLetterRequest;
use App\Http\Requests\UpdateLetterRequest;
use Illuminate\Http\Request;

class LetterController extends Controller
{
    public function letterIndex(Request $request)
    {
        $letter = Letter::all();
        return view('Letter.letter', [
            'letters' => Letter::paginate(5),
        ]);
    }

    public function saveLetter(Request $request)
    {
        Letter::saveLetter($request);
        return redirect(route('letter'));
    }

    public function deleteLetter(Request $request)
    {
        $letter = Letter::find($request->letter_id);
        $letter->delete();
        return back();
    }

    public function editLetter($id)
    {
        return view('Letter.edit-letter', [
            'letters' => Letter::find($id)
        ]);
    }

    public function updateLetter(Request $request)
    {
        Letter::updateLetter($request);
        return redirect(route('letter'));
    }




    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreLetterRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLetterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Letter $letter
     * @return \Illuminate\Http\Response
     */
    public function show(Letter $letter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Letter $letter
     * @return \Illuminate\Http\Response
     */
    public function edit(Letter $letter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateLetterRequest $request
     * @param \App\Models\Letter $letter
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLetterRequest $request, Letter $letter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Letter $letter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Letter $letter)
    {
        //
    }
}
