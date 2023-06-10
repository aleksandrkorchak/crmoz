<?php

namespace App\Services\OAuth2;

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class OAuth2
{
    private $oauth2;

    private const GRANT_TOKEN_EXPIRE_IN_DEFAULT = 120;
    private const ACCESS_TOKEN_EXPIRE_IN_DEFAULT = 3600;
    private const TIME_CORRECTION_SEC = 10;

    public function __construct()
    {
        $this->oauth2 = \App\Models\OAuth2::first();
    }

    public function updateTokens($grantToken)
    {
        $data = $this->requestAccessAndRefreshTokens($grantToken);
        $tokens = [
            'grant_token' => $grantToken,
            'grant_token_expire_in' => self::GRANT_TOKEN_EXPIRE_IN_DEFAULT,
            'access_token' => $data['access_token'],
            'access_token_expire_in' => $data['expires_in'] ?? self::ACCESS_TOKEN_EXPIRE_IN_DEFAULT,
            'refresh_token' => $data['refresh_token']
        ];
        $this->saveTokens($tokens);
    }

    private function requestAccessAndRefreshTokens($grantToken)
    {
        $data = [
            'grant_type' => "authorization_code",
            'client_id' => $this->oauth2->client_id,
            'client_secret' => $this->oauth2->client_secret,
            'redirect_uri' => $this->oauth2->redirect_uri,
            'code' => $grantToken
        ];

        $response = Http::asForm()->post('https://accounts.zoho.com/oauth/v2/token', $data);

        return $response->json();
    }

    private function saveTokens($tokens)
    {
        $this->oauth2->grant_token = $tokens['grant_token'];
        $this->oauth2->refresh_token = $tokens['refresh_token'];
        $this->oauth2->access_token = $tokens['access_token'];
        $this->oauth2->grant_token_expire_at = $this->calculateTokenLifetime($tokens['grant_token_expire_in']);
        $this->oauth2->access_token_expire_at = $this->calculateTokenLifetime($tokens['access_token_expire_in']);

        $this->oauth2->save();
    }

    private function calculateTokenLifetime(int $tokenExpireIn)
    {
        $tokenExpirationDate = $tokenExpireIn - self::TIME_CORRECTION_SEC;

        return Carbon::now()->addSeconds($tokenExpirationDate);
    }

    public function getAuthorizationUrl()
    {
        $data = [
            'scope' => $this->oauth2->scope,
            'client_id' => $this->oauth2->client_id,
            'response_type' => 'code',
            'access_type' => 'offline',
            'redirect_uri' => $this->oauth2->redirect_uri
        ];

        return "https://accounts.zoho.com/oauth/v2/auth?" . http_build_query($data);
    }


    private function requestNewAccessToken()
    {
        $data = [
            'grant_type' => 'refresh_token',
            'refresh_token' => $this->oauth2->refresh_token,
            'client_id' => $this->oauth2->client_id,
            'client_secret' => $this->oauth2->client_secret
        ];
        $response = Http::post('https://accounts.zoho.com/oauth/v2/token?' . http_build_query($data));

        return $response->json();
    }

    public function updateAccessToken()
    {
        $data = $this->requestNewAccessToken();

        $this->oauth2->access_token = $data['access_token'];
        $this->oauth2->access_token_expire_at = $this->calculateTokenLifetime($data['expires_in']);

        $this->oauth2->save();
    }

    public function isValidAccessToken()
    {
        if ($this->oauth2->access_token) {
            $currentDateTime = Carbon::now();
            $accessTokenExpireAt = $this->oauth2->access_token_expire_at;
            if ($currentDateTime < $accessTokenExpireAt) {
                return true;
            }
        }

        return false;
    }

    public function IsValidRefreshToken()
    {
        if ($this->oauth2->refresh_token) {
            return true;
        }

        return false;
    }

}
