<?php

namespace App\Http\Controllers;

use App\Http\Requests\Mailer\CreateMailerRequest;
use App\Http\Requests\Mailer\UpdateMailerRequest;
use App\Models\Mailer;
use Illuminate\Http\Request;

class MailerController extends Controller
{
    public function index()
    {
        $mailers = Mailer::latest()->paginate(5);

        return view('mailer.index', compact('mailers'));
    }

    public function store(CreateMailerRequest $request)
    {
        $formdata = $request->validated();
        Mailer::create($formdata);
        return back()->with('create', 'Mailer created successfully');
    }

    public function edit(Mailer $mailer)
    {
        return view('mailer.edit', compact('mailer'));
    }

    public function update(UpdateMailerRequest $request,Mailer $mailer)
    {
        $formdata = $request->validated();
        $mailer->update($formdata);
        return redirect(route('mailer.index'))->with('update', 'Mailer updated successfully');
    }

    public function destroy(Mailer $mailer)
    {
        $mailer->delete();
        return back()->with('destroy', 'Mailer deleted successfully');
    }
}
