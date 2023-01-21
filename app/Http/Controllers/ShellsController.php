<?php

namespace App\Http\Controllers;

use App\Http\Requests\Shell\CreateShellRequest;
use App\Http\Requests\Shell\UpdateShellRequest;
use App\Models\Shells;

class ShellsController extends Controller
{

    public function index()
    {
        $shells = Shells::paginate(5);
        return view('MyProducts.Shells.index', compact('shells'));
    }


    public function create()
    {
        return view('MyProducts.Shells.create');

    }

    public function store(CreateShellRequest $request)
    {
        $formData = $request->validated();
        $formData['hosting'] = 'from controller';
        $formData['country'] = 'from controller';
        $formData['seo_rank'] = 'from controller';
        $formData['status'] = 1;
        Shells::create($formData);
        return redirect()->route('shell.index')->with('create', 'Shell created successfully');
    }


    public function show(Shells $shells)
    {
        //
    }


    public function edit(Shells $shell)
    {
        return view('MyProducts.Shells.edit', compact('shell'));

    }

    public function update(UpdateShellRequest $request, Shells $shell)
    {
        $formData = $request->validated();
        $formData['hosting'] = 'from controller';
        $formData['country'] = 'from controller';
        $formData['seo_rank'] = 'from controller';
        $formData['status'] = 1;
        $shell->update($formData);
        return redirect()->route('shell.index')->with('update','Shell updated successfully');
    }


    public function destroy(Shells $shell)
    {
        $shell->delete();
        return redirect()->route('shell.index')->with('destroy', 'Shell deleted successfully');
    }
}
