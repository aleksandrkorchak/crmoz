<?php

namespace App\Http\Controllers\Deal;

use App\Http\Controllers\Controller;
use App\Services\Deal\Deal;

class IndexController extends Controller
{
    public function __invoke(Deal $deal)
    {
        $deals = $deal->all();
        $deals = json_encode($deals['data'], JSON_UNESCAPED_UNICODE);

        return view('deal.index', compact('deals'));
    }
}
