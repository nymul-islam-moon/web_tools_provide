<?php

namespace App\Http\Controllers;

use App\Models\MailerModel;
use Illuminate\Http\Request;

class MailerController extends Controller
{
    public function index()
    {
        $mailers = MailerModel::paginate(5);

        return view('mailer.index-mailer',compact('mailers'));
    }
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => [
                'required',
            ],
            'price' => [
                'required',
            ]
        ]);

        MailerModel::create($formFields);

        return back();
    }

    public function edit($id)
    {
        $mailer = MailerModel::find($id);
        return view('mailer.edit-mailer',compact('mailer'));
    }

    public function update(Request $request, $id)
    {

        $formFields = $request->validate([
            'name' => [
                'required',
            ],
            'price' => [
                'required',
            ]
        ]);

        $mailer = MailerModel::find($id);
        $mailer->update($formFields);

        return redirect(route('mailer'));
    }

    public function destroy($id)
    {

        $mailer = MailerModel::find($id);
        $mailer->delete();
        return back();
    }




}
