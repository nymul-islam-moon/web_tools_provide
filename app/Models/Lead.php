<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    private static $lead;
    use HasFactory;

    public static function saveLead($request)
    {
        self::$lead = new Lead();
        self::$lead->download_link = $request->download_link;
        self::$lead->number = $request->number;
        self::$lead->type = $request->type;
        self::$lead->provider = $request->provider;
        self::$lead->description = $request->description;
        self::$lead->additional_info = $request->additional_info;
        self::$lead->proof = $request->proof;
        self::$lead->country = $request->country;
        self::$lead->price = $request->price;
        self::$lead->save();
    }

    public static function saveEditLead($request)
    {
        self::$lead = Lead::find($request->lead_id);
        self::$lead->download_link = $request->download_link;
        self::$lead->number = $request->number;
        self::$lead->type = $request->type;
        self::$lead->provider = $request->provider;
        self::$lead->description = $request->description;
        self::$lead->additional_info = $request->additional_info;
        self::$lead->proof = $request->proof;
        self::$lead->country = $request->country;
        self::$lead->price = $request->price;
        self::$lead->save();
    }
}
