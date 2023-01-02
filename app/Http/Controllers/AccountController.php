<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{

    public function accountIndex(Request $request)
    {
        $account = Account::all();
        return view('Account.account', [
            'accounts' => Account::all()
        ]);
    }

    public function saveAccount(Request $request)
    {
        Account::saveAccount($request);
        return redirect(route('account'));
    }

    public function deleteAccount(Request $request)
    {
        $account = Account::find($request->account_id);
        $account->delete();
        return back();
    }

    public function editAccount($id)
    {
        return view('Account.edit-account', [
            'accounts' => Account::find($id)
        ]);
    }

    public function updateAccount(Request $request)
    {
        Account::updateAccount($request);
        return redirect(route('account'));
    }

    public function store(Request $request)
    {
        //
    }


    public function show(Account $account)
    {
        //
    }


    public function edit(Account $account)
    {
        //
    }


    public function update(Request $request, Account $account)
    {
        //
    }


    public function destroy(Account $account)
    {
        //
    }
}
