<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LufixService extends Model
{
    use HasFactory;

    public static $lufix;

    public static function saveLufix($request)
    {
        self::$lufix = new LufixService();
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
        self::$lufix = LufixService::find($request->lufix_services_id);
        self::$lufix->title = $request->title;
        self::$lufix->description = $request->description;
        self::$lufix->duration = $request->duration;
        self::$lufix->price_type = $request->price_type;
        self::$lufix->save();
    }
}
