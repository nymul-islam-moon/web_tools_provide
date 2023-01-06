<?php

namespace App\Http\Controllers;

use App\Models\SMTP;
use App\Models\Webmail;
use Illuminate\Http\Request;

class SMTPController extends Controller
{
    public $smtp;
    public function smtp()
    {
        return view('smtp.index-smtp',[
            'smtps' => SMTP::paginate(5),
            'webMails' => Webmail::all(),
        ]);
    }

    public function saveSmtp(Request $request)
    {
        $request->validate([
            'host' => 'required',
            'port' => 'required',
            'username' => 'required',
            'password' => 'required',
            'web_mail' => 'required',
            'price' => 'required',
        ]);
        SMTP::saveSmtp($request);
        return back();
    }

    public function deleteSmtp($id)
    {
        $this->smtp = SMTP::find($id);
        $this->smtp->delete();
        return back();
    }

    public function editSmtp($id)
    {
        $this->smtp = SMTP::find($id);
        return view('smtp.edit-smtp',[
            'smtp' => $this->smtp,
        ]);
    }

    public function saveEditSmtp(Request $request)
    {
        $request->validate([
            'host' => 'required',
            'port' => 'required',
            'username' => 'required',
            'web_mail' => 'required',
            'price' => 'required',
        ]);
        SMTP::saveEditSmtp($request);
        return redirect(route('smtp'));
    }
}
