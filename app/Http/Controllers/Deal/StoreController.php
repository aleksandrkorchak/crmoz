<?php

namespace App\Http\Controllers\Deal;

use App\Http\Controllers\Controller;
use App\Http\Requests\Deal\StoreRequest;
use App\Services\Deal\Deal;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request, Deal $deal)
    {
        $data = $request->validated();
        $status = $deal->store($data)['status'];

        if ($status == 'success') {
            $message['success'] = 'Deal was created succefully';
        } else {
            $message['error'] = 'Error creating deal';
        }

        return redirect()->route('deal.index')->with($message);
    }
}
