<?php

namespace App\Http\Controllers;

use App\Http\Requests\Account\CreateAccountRequest;
use App\Http\Requests\Account\UpdateAccountRequest;
use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{

    public function index(Request $request)
    {
        $accounts = Account::latest()->paginate(5);

        return view('account.index', compact('accounts'));
    }

    public function store(CreateAccountRequest $request)
    {
        $formdata = $request->validated();
        $formdata['status'] = 1;
        Account::create($formdata);
        return back()->with('create', 'Account created successfully');
    }



    public function edit(Account $account)
    {
        return view('account.edit', compact('account'));
    }

    public function update(UpdateAccountRequest $request,Account $account)
    {
        $formdata = $request->validated();
        $account->update($formdata);
        return redirect(route('account.index'))->with('update', 'Account updated successfully');
    }

    public function destroy(Account $account)
    {
        $account->delete();
        return back()->with('destroy', 'Account deleted successfully');
    }
}
