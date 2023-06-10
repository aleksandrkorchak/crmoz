<?php

namespace Database\Seeders;

use App\Models\OAuth2;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OAuth2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OAuth2::insert([
            'client_id' => '1000.G0LSTF25AB9LYS099VEKWWN4D27U5B',
            'client_secret' => '8f94b206881d0dfa51c130a9a88dc22f395211cbb4',
            'scope' => 'ZohoCRM.modules.ALL',
            'redirect_uri' => 'http://localhost/',
        ]);

    }
}
