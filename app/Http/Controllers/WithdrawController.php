<?php

namespace App\Http\Controllers;

use App\Models\Withdraw;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    public function withdrawIndex(Request $request)
    {
        $withdraw = Withdraw::all();
        return view('Sales.Withdraw.withdrawal', [
            'withdraws' => Withdraw::all()
        ]);
    }
}
