<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    use HasFactory;

    public static $tutorial;

    public static function saveTutorial($request)
    {
        self::$tutorial = new Tutorial();
        self::$tutorial->tutorial_name = $request->tutorial_name;
        self::$tutorial->hits_link = $request->hits_link;
        self::$tutorial->description = $request->description;
        self::$tutorial->proof = $request->proof;
        self::$tutorial->selling_type = $request->selling_type;
        self::$tutorial->instruction = $request->instruction;
        self::$tutorial->price = $request->price;
        self::$tutorial->save();
    }

    public static function updateTutorial($request)
    {
        self::$tutorial = Tutorial::find($request->tutorial_id);
        self::$tutorial->tutorial_name = $request->tutorial_name;
        self::$tutorial->hits_link = $request->hits_link;
        self::$tutorial->description = $request->description;
        self::$tutorial->proof = $request->proof;
        self::$tutorial->selling_type = $request->selling_type;
        self::$tutorial->instruction = $request->instruction;
        self::$tutorial->price = $request->price;
        self::$tutorial->save();
    }
}
