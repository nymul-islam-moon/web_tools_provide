<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClosedService extends Model
{
    use HasFactory;

    public static function saveClosedServiceOrder($request)
    {
        $service = new ClosedService();
        $service->title = $request->title;
        $service->price = $request->price;
        $service->save();
    }
}
