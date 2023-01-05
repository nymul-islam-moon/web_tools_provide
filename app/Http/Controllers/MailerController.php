<?php

namespace App\Http\Controllers;

use App\Models\MailerModel;
use Illuminate\Http\Request;

class MailerController extends Controller
{
    public $mailer;
    public function index()
    {
        $mailers = MailerModel::all();

        return view('mailer.index-mailer',compact('mailers'));
    }
    public function create(Request $request)
    {
        MailerModel::saveMailer($request);
        return back();
    }

    public function edit($id)
    {
        $this->mailer = MailerModel::find($id);
        return view('mailer.edit-mailer',[
            'mailer' => $this->mailer,
        ]);
    }

    public function update(Request $request)
    {
        MailerModel::saveEditMailer($request);
        return redirect(route('mailer'));
    }

    public function delete($id)
    {
        $this->mailer = MailerModel::find($id);
        $this->mailer->delete();
        return back();
    }




}
