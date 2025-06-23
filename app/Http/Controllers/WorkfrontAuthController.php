<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use App\Services\Providers\WorkfrontAuthProvider;
use Exception;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use League\OAuth2\Client\Provider\GenericProvider;

class WorkfrontAuthController extends Controller
{
    public function redirectToProvider()
    {
        $provider = $this->getAuthProvider();

        return redirect($provider->getAuthorizationUrl());
    }

    /**
     * @return WorkfrontAuthProvider|GenericProvider
     */
    public function getAuthProvider(): WorkfrontAuthProvider|GenericProvider
    {
        return new WorkfrontAuthProvider([
            'clientId' => config('services.workfront.client_id'),
            'clientSecret' => config('services.workfront.client_secret'),
            'redirectUri' => config('services.workfront.redirect_uri'),
        ]);
    }

    /**
     * @throws GuzzleException
     * @throws IdentityProviderException
     */
    public function handleCallback(Request $request)
    {
        $tokens = $this->getAuthProvider()->getAccessToken('authorization_code', [
            'code' => $request->get('code')
        ]);
//        // Save tokens to session or database

        Settings::updateOrCreate(['key' => 'workfront_access_token'], ['value' => $tokens->getToken()]);
        Settings::updateOrCreate(['key' => 'workfront_refresh_token'], ['value' => $tokens->getRefreshToken()]);
        Settings::updateOrCreate(['key' => 'workfront_expires_in'], ['value' => now()->addSeconds($tokens->getExpires())]);

        return redirect()->route('workfront.form');
    }
}
