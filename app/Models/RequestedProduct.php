<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestedProduct extends Model
{
    private static $product;
    use HasFactory;

    public static function saveRequestedProduct($request)
    {
        self::$product = new RequestedProduct();
        self::$product->product_name = $request->product_name;
        self::$product->message = $request->message;
        self::$product->save();
    }
}
