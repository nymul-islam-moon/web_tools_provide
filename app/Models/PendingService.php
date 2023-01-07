<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendingService extends Model
{
    use HasFactory;
    public static function savePendingServiceOrder($request)
    {
        $service = new PendingService();
        $service->title = $request->title;
        $service->price = $request->price;
        $service->save();
    }
}
