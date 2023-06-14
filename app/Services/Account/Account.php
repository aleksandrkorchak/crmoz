<?php

namespace App\Services\Account;

use Illuminate\Support\Facades\Http;

class Account
{
    public function all() {
        $fields = [
            'id',
            'Account_Name',
            'Website',
            'Phone'
        ];
        $params = '?fields='. implode(',',$fields);
        $response = Http::get('https://www.zohoapis.com/crm/v2/accounts' . $params);

        return $response->json();
    }

    public function allAccountsWithFields() {

        $response = Http::get('https://www.zohoapis.com/crm/v2/accounts');

        return $response->json();
    }

    public function store($account) {
        $params =
            [
                "data" => [
                    [
                        "Account_Name" => $account['account_name'],
                        "Website" => $account['account_website'],
                        "Phone" => $account['account_phone'],
                    ]
                ],
                'trigger' => [
                    "approval",
                    "workflow",
                    "blueprint"
                ]
            ];
        $response = Http::post('https://www.zohoapis.com/crm/v2/accounts', $params);

        return $response->json()['data'][0]['status'];
    }
}
