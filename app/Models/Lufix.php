<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lufix extends Model
{
    use HasFactory;

    public static $lufix;

    public static function saveLufix($request)
    {
        self::$lufix = new Lufix();
        self::$lufix->title = $request->title;
        self::$lufix->description = $request->description;
        self::$lufix->proof = $request->proof;
        self::$lufix->selling_type = $request->selling_type;
        self::$lufix->duration = $request->duration;
        self::$lufix->price_type = $request->price_type;
        self::$lufix->save();
    }

    public static function updateLufix($request)
    {
        self::$lufix = Lufix::find($request->lufix_id);
        self::$lufix->title = $request->title;
        self::$lufix->description = $request->description;
        self::$lufix->duration = $request->duration;
        self::$lufix->price_type = $request->price_type;
        self::$lufix->save();
    }
}
