<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webmail extends Model
{
    private static $webMail;
    use HasFactory;

    public static function saveWebMail($request)
    {
        self::$webMail = new Webmail();
        self::$webMail->type = $request->type;
        self::$webMail->username = $request->username;
        self::$webMail->password = bcrypt($request->password);
        self::$webMail->price = $request->price;
        self::$webMail->save();
    }

    public static function saveEditWebMail($request)
    {
        self::$webMail = Webmail::find($request->webmail_id);
        self::$webMail->type = $request->type;
        self::$webMail->username = $request->username;
        self::$webMail->price = $request->price;
        self::$webMail->save();
    }
}
