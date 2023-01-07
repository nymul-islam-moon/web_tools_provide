<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClosedReport extends Model
{
    private static $report;
    use HasFactory;

    public static function saveClosedReports($request){
        self::$report = new ClosedReport();
        self::$report->item_name = $request->item_name;
        self::$report->item_type = $request->item_type;
        self::$report->price = $request->price;
        self::$report->report_time = $request->report_time;
        self::$report->save();
    }
}
