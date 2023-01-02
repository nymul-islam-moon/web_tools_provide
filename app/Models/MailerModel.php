<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailerModel extends Model
{
    private static $mailer;
    use HasFactory;

    public static function saveMailer($request)
    {
        self::$mailer = new MailerModel();
        self::$mailer->mailer = $request->mailer;
        self::$mailer->price = $request->price;
        self::$mailer->save();
    }

    public static function saveEditMailer($request)
    {
        self::$mailer = MailerModel::find($request->mailer_id);
        self::$mailer->mailer = $request->mailer;
        self::$mailer->price = $request->price;
        self::$mailer->save();
    }
}
