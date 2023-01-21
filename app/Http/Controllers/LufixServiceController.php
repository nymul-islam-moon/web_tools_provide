<?php

namespace App\Http\Controllers;

use App\Http\Requests\LufixService\CreateLufixServiceRequest;
use App\Http\Requests\LufixService\LufixServiceCreateRequest;
use App\Http\Requests\LufixService\UpdateLufixServiceRequest;
use App\Models\LufixService;
use Illuminate\Http\Request;

class LufixServiceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lufixServices = LufixService::paginate(5);
        return view('MyProducts.Lufix.index', compact('lufixServices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('MyProducts.Lufix.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateLufixServiceRequest $request)
    {
        $formdata = $request->validated();
        $formdata['status'] = 0;
        LufixService::create($formdata);
        return redirect(route('lufix.index'))->with('create', 'Lufix Service created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\LufixService $lufixService
     * @return \Illuminate\Http\Response
     */
    public function show(LufixService $lufixService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\LufixService $lufixService
     * @return \Illuminate\Http\Response
     */
    public function edit(LufixService $lufix)
    {
        return view('MyProducts.lufix.edit', compact('lufix'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\LufixService $lufixService
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLufixServiceRequest $request, LufixService $lufix)
    {
        $formdata = $request->validated();
        $formdata['status'] = 0;
        $lufix->create($formdata);
        return redirect(route('lufix.index'))->with('create', 'Lufix Service updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\LufixService $lufixService
     * @return \Illuminate\Http\Response
     */
    public function destroy(LufixService $lufix)
    {
        $lufix->delete();
        return back()->with('destroy', 'Lufix Service deleted successfully');
    }
}
