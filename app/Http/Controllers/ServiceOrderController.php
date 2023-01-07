<?php

namespace App\Http\Controllers;

use App\Models\ClosedService;
use App\Models\PendingService;
use Illuminate\Http\Request;
use function Symfony\Component\String\b;

class ServiceOrderController extends Controller
{
    public function pendingServiceOrder()
    {
        return view('service-order.pending-service-order',[
            'services' => PendingService::paginate(5),
        ]);
    }

    public function savePendingServiceOrder(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required',
        ]);
        PendingService::savePendingServiceOrder($request);
        return back();
    }

    public function closedServiceOrder()
    {
        return view('service-order.closed-service-order',[
            'services' => ClosedService::paginate(5),
        ]);
    }

    public function saveClosedServiceOrder(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required',
        ]);
        ClosedService::saveClosedServiceOrder($request);
        return back();
    }
}
