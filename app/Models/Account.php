<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $table = 'accounts';
    protected $fillable = ['account_type', 'hits_link', 'website', 'price', 'description', 'source', 'country', 'proof'];

    public static $account;

    public static function saveAccount($request)
    {
        self::$account = new Account();
        self::$account->account_type = $request->account_type;
        self::$account->hits_link = $request->hits_link;
        self::$account->website = $request->website;
        self::$account->price = $request->price;
        self::$account->description = $request->description;
        self::$account->source = $request->source;
        self::$account->country = $request->country;
        self::$account->proof = $request->proof;
        self::$account->save();
    }

    public static function updateAccount($request)
    {
        self::$account = Account::find($request->account_id);
        self::$account->account_type = $request->account_type;
        self::$account->hits_link = $request->hits_link;
        self::$account->website = $request->website;
        self::$account->price = $request->price;
        self::$account->description = $request->description;
        self::$account->source = $request->source;
        self::$account->country = $request->country;
        self::$account->proof = $request->proof;
        self::$account->save();
    }

}
