<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Http\Requests\Account\StoreRequest;
use App\Services\Account\Account;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request, Account $account)
    {
        $data = $request->validated();
        $status = $account->store($data);

        if ($status == 'success') {
            $message['success'] = 'Account was created succefully';
        } else {
            $message['error'] = 'Error creating account';
        }

        return redirect()->route('account.index')->with($message);
    }
}
