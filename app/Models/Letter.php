<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    use HasFactory;

    public static $letter;

    public static function saveLetter($request)
    {
        self::$letter = new Letter();
        self::$letter->type = $request->type;
        self::$letter->letter_name = $request->letter_name;
        self::$letter->hits_link = $request->hits_link;
        self::$letter->description = $request->description;
        self::$letter->proof = $request->proof;
        self::$letter->selling_type = $request->selling_type;
        self::$letter->instruction = $request->instruction;
        self::$letter->price = $request->price;
        self::$letter->save();
    }

    public static function updateLetter($request)
    {
        self::$letter = Letter::find($request->letter_id);
        self::$letter->type = $request->type;
        self::$letter->letter_name = $request->letter_name;
        self::$letter->hits_link = $request->hits_link;
        self::$letter->description = $request->description;
        self::$letter->proof = $request->proof;
        self::$letter->selling_type = $request->selling_type;
        self::$letter->instruction = $request->instruction;
        self::$letter->price = $request->price;
        self::$letter->save();
    }
}
