<?php

namespace App\Http\Middleware;

use App\Models\OAuth2;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;

class DefaultHeadersHttpClient
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $accessToken = OAuth2::select('access_token')->first()['access_token'];
        Http::withDefaultOptions([
            'base_uri' => 'https://www.zohoapis.com',
            'headers' => [
                'Authorization' => 'Zoho-oauthtoken '. $accessToken
            ],
        ]);

        return $next($request);
    }
}
