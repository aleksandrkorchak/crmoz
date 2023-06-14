<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Services\Account\Account;

class IndexController extends Controller
{
    public function __invoke(Account $account)
    {
        $accounts = $account->all();
        $accounts = json_encode($accounts['data'], JSON_UNESCAPED_UNICODE);

        return view('account.index', compact('accounts'));
    }
}
