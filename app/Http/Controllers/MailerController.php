<?php

namespace App\Http\Controllers;

use App\Models\MailerModel;
use Illuminate\Http\Request;

class MailerController extends Controller
{
    public function mailer()
    {
        return view('mailer.index-mailer',[
            'mailers' => MailerModel::all(),
        ]);
    }
}
