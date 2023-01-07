<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Script extends Model
{
    use HasFactory;

    protected $table = 'scripts';
    protected $fillable = ['script_name', 'program_lang', 'hits_link', 'description', 'proof', 'selling_type', 'instruction', 'price'];

    public static $script;

    public static function saveScript($request)
    {
        self::$script = new Script();
        self::$script->script_name = $request->script_name;
        self::$script->program_lang = $request->program_lang;
        self::$script->hits_link = $request->hits_link;
        self::$script->description = $request->description;
        self::$script->proof = $request->proof;
        self::$script->selling_type = $request->selling_type;
        self::$script->instruction = $request->instruction;
        self::$script->price = $request->price;
        self::$script->save();
    }

    public static function updateScript($request)
    {
        self::$script = Script::find($request->script_id);
        self::$script->script_name = $request->script_name;
        self::$script->program_lang = $request->program_lang;
        self::$script->hits_link = $request->hits_link;
        self::$script->description = $request->description;
        self::$script->proof = $request->proof;
        self::$script->selling_type = $request->selling_type;
        self::$script->instruction = $request->instruction;
        self::$script->price = $request->price;
        self::$script->save();
    }
}
