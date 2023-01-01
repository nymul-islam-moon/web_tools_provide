<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    private static $card;
    use HasFactory;

    public static function saveCard($request)
    {
        self::$card = new Card();
        self::$card->security_type = $request->security_type;
        self::$card->card_number = $request->card_number;
        self::$card->expiration = $request->expiration;
        self::$card->cvv = $request->cvv;
        self::$card->available_info = $request->available_info;
        self::$card->all_info = $request->all_info;
        self::$card->price = $request->price;
        self::$card->save();
    }

    public static function saveEditCard($request)
    {
        self::$card = Card::find($request->card_id);
        self::$card->security_type = $request->security_type;
        self::$card->card_number = $request->card_number;
        self::$card->expiration = $request->expiration;
        self::$card->cvv = $request->cvv;
        self::$card->available_info = $request->available_info;
        self::$card->all_info = $request->all_info;
        self::$card->price = $request->price;
        self::$card->save();
    }
}
