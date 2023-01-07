<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendingReport extends Model
{
    private static $report;
    use HasFactory;

    public static function savePendingReports($request){
        self::$report = new PendingReport();
        self::$report->item_name = $request->item_name;
        self::$report->item_type = $request->item_type;
        self::$report->price = $request->price;
        self::$report->report_time = $request->report_time;
        self::$report->save();
    }
}
