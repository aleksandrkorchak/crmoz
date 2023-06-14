<?php

namespace App\Services\Deal;

use Illuminate\Support\Facades\Http;

class Deal
{
    public function all() {
        $fields = [
            'id',
            'Deal_Name',
            'Stage',
            'Closing_Date',
            'Account_Name'
        ];
        $params = '?fields='. implode(',',$fields);
        $response = Http::get('https://www.zohoapis.com/crm/v2/deals' . $params);
//        dd($response->json());

        return $response->json() ?? ['data' => []];
    }

    public function getFullStagesList() {
        $response = Http::get('https://www.zohoapis.com/crm/v2/settings/fields?module=Deals');
        $fields = $response->json()['fields'];

        $stages = array_filter($fields, function ($field) {
            return $field['api_name'] == 'Stage';
        });

        return $stages[key($stages)];
    }

    public function allDealsWithFields() {
        $response = Http::get('https://www.zohoapis.com/crm/v2/deals');

        return $response->json();
    }

    public function store($deal) {
        $params =
        [
            "data" => [
                [
                    "Deal_Name" => $deal['deal_name'],
                    "Stage" => $deal['deal_stage_id'],
                    "Closing_Date" => $deal['deal_closing_date'],
                    "Account_Name" => [
                        'id' => $deal['deal_account_id']
                    ]
                ]
            ],
            'trigger' => [
                "approval",
                "workflow",
                "blueprint"
            ]
        ];
        $response = Http::post('https://www.zohoapis.com/crm/v2/deals', $params);

        return $response->json()['data'][0];
    }
}
