<?php

namespace App\Http\Middleware;

use App\Services\OAuth2\OAuth2;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureTokenIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $oauth2 = new OAuth2();

        if ($request->code) {
            $oauth2->updateTokens($request->code);
        }

        if (!$oauth2->isValidAccessToken() && $oauth2->IsValidRefreshToken()) {
            $oauth2->updateAccessToken();
        } else if (!$oauth2->IsValidRefreshToken()) {
            return redirect($oauth2->getAuthorizationUrl());
        };

        return $next($request);
    }
}
