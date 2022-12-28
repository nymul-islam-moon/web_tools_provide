<?php

namespace App\Http\Controllers;

use App\Models\SMTP;
use Illuminate\Http\Request;

class SMTPController extends Controller
{
    public function smtp()
    {
        return view('smtp.index-smtp',[
            'smtps' => SMTP::all(),
        ]);
    }
}
