<?php

namespace App\Http\Controllers;

use App\Models\MailerModel;
use Illuminate\Http\Request;

class MailerController extends Controller
{
    public $mailer;
    public function mailer()
    {
        return view('mailer.index-mailer',[
            'mailers' => MailerModel::all(),
        ]);
    }
    public function saveMailer(Request $request)
    {
        MailerModel::saveMailer($request);
        return back();
    }

    public function deleteMailer($id)
    {
        $this->mailer = MailerModel::find($id);
        $this->mailer->delete();
        return back();
    }

    public function editMailer($id)
    {
        $this->mailer = MailerModel::find($id);
        return view('mailer.edit-mailer',[
            'mailer' => $this->mailer,
        ]);
    }

    public function saveEditMailer(Request $request)
    {
        MailerModel::saveEditMailer($request);
        return redirect(route('mailer'));
    }
}
