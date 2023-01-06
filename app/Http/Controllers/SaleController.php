<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function saleIndex(Request $request)
    {
        $sale = Sale::all();
        return view('Sales.Sales.all-sales', [
            'sales' => Sale::paginate(5),
        ]);
    }

}
