<?php

namespace App\Http\Controllers;

use App\Models\Webmail;
use Illuminate\Http\Request;

class WebmailController extends Controller
{
    public function webMail()
    {
        return view('webmail.index-webmail',[
            'webMails' => Webmail::all(),
        ]);
    }
}
