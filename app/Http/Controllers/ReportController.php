<?php

namespace App\Http\Controllers;

use App\Models\ClosedReport;
use App\Models\PendingReport;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function pendingReports()
    {
        return view('report.pending-report',[
            'reports' => PendingReport::paginate(5),
        ]);
    }

    public function savePendingReports(Request $request)
    {
        $request->validate([
            'item_name' => 'required',
            'item_type' => 'required',
            'price' => 'required',
            'report_time' => 'required',
        ]);
        PendingReport::savePendingReports($request);
        return back();
    }

    public function closedReports()
    {
        return view('report.closed-report',[
            'reports' => ClosedReport::paginate(5),
        ]);
    }

    public function saveClosedReports(Request $request)
    {
        $request->validate([
            'item_name' => 'required',
            'item_type' => 'required',
            'price' => 'required',
            'report_time' => 'required',
        ]);
        ClosedReport::saveClosedReports($request);
        return back();
    }
}
