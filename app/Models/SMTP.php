<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SMTP extends Model
{
    private static $smtp;
    use HasFactory;

    public static function saveSmtp($request){
        self::$smtp = new SMTP();
        self::$smtp->host = $request->host;
        self::$smtp->port = $request->port;
        self::$smtp->username = $request->username;
        self::$smtp->password = bcrypt($request->password);
        self::$smtp->web_mail = $request->web_mail;
        self::$smtp->price = $request->price;
        self::$smtp->save();
    }

    public static function saveEditSmtp($request)
    {
        self::$smtp = SMTP::find($request->smtp_id);
        self::$smtp->host = $request->host;
        self::$smtp->port = $request->port;
        self::$smtp->username = $request->username;
        self::$smtp->web_mail = $request->web_mail;
        self::$smtp->price = $request->price;
        self::$smtp->save();
    }
}
