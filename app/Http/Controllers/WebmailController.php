<?php

namespace App\Http\Controllers;

use App\Models\Webmail;
use Illuminate\Http\Request;

class WebmailController extends Controller
{
    public $webMail;
    public function webMail()
    {
        return view('webmail.index-webmail',[
            'webMails' => Webmail::paginate(5),
        ]);
    }

    public function saveWebMail(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'username' => 'required',
            'password' => 'required',
            'price' => 'required',
        ]);
        Webmail::saveWebMail($request);
        return back();
    }

    public function deleteWebMail($id)
    {
        $this->webMail = Webmail::find($id);
        $this->webMail->delete();
        return back();
    }

    public function editWebMail($id)
    {
        $this->webMail = Webmail::find($id);
        return view('webmail.edit-webmail',[
            'webmail' => $this->webMail,
        ]);
    }

    public function saveEditWebMail(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'username' => 'required',
            'price' => 'required',
        ]);
        Webmail::saveEditWebMail($request);
        return redirect(route('webmail'));
    }
}
