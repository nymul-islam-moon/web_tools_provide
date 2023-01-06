<?php

namespace App\Http\Controllers;

use App\Models\LufixService;
use Illuminate\Http\Request;

class LufixServiceController extends Controller
{

    public function lufixIndex(Request $request)
    {
        $lufix = LufixService::all();
        return view('Lufix.lufix', [
            'lufix_services' => LufixService::paginate(5),
        ]);
    }

    public function saveLufix(Request $request)
    {
        LufixService::saveLufix($request);
        return redirect(route('lufix'));
    }

    public function deleteLufix(Request $request)
    {
        $lufix = LufixService::find($request->lufix_services_id);
        $lufix->delete();
        return back();
    }

    public function editLufix($id)
    {
        return view('Lufix.edit-lufix', [
            'lufix_services' => LufixService::find($id)
        ]);
    }

    public function updateLufix(Request $request)
    {
        LufixService::updateLufix($request);
        return redirect(route('lufix'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LufixService  $lufixService
     * @return \Illuminate\Http\Response
     */
    public function show(LufixService $lufixService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LufixService  $lufixService
     * @return \Illuminate\Http\Response
     */
    public function edit(LufixService $lufixService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LufixService  $lufixService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LufixService $lufixService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LufixService  $lufixService
     * @return \Illuminate\Http\Response
     */
    public function destroy(LufixService $lufixService)
    {
        //
    }
}
