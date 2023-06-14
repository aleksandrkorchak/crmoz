<?php

namespace App\Http\Controllers\Deal;

use App\Http\Controllers\Controller;
use App\Services\Account\Account;
use App\Services\Deal\Deal;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke(Account $account, Deal $deal)
    {
        $stages = $deal->getFullStagesList()['pick_list_values'];
        $stages = json_encode($stages, JSON_UNESCAPED_UNICODE);

        $accounts = $account->all()['data'];
        $accounts = json_encode($accounts, JSON_UNESCAPED_UNICODE);

        return view('deal.create', compact('stages','accounts'));
    }
}
