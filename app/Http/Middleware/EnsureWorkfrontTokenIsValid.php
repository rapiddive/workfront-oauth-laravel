<?php

namespace App\Http\Middleware;

use App\Models\Settings;
use App\Services\Providers\WorkfrontAuthProvider;
use Closure;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use League\OAuth2\Client\Provider\GenericProvider;

class EnsureWorkfrontTokenIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(Request): (Response|RedirectResponse) $next
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $expiresIn = Settings::where('key', 'workfront_expires_in')->value('value');

        if (now()->gte($expiresIn)) {
            $this->refreshAccessToken();
        }
        return $next($request);
    }

    /**
     * @return void
     * @throws GuzzleException
     * @throws IdentityProviderException
     */
    protected function refreshAccessToken(): void
    {
        $refreshToken = Settings::where('key', 'workfront_refresh_token')->value('value');

        $tokens = $this->getAuthProvider()->getAccessToken('refresh_token', [
            'refresh_token' => $refreshToken
        ]);

        if ($tokens->hasExpired()) {
            abort(401, 'Unable to refresh Workfront access token.');
        }

        Settings::updateOrCreate(['key' => 'workfront_access_token'], ['value' => $tokens->getToken()]);
        Settings::updateOrCreate(['key' => 'workfront_refresh_token'], ['value' => $tokens->getRefreshToken()]);
        Settings::updateOrCreate(['key' => 'workfront_expires_in'], ['value' => now()->addSeconds($tokens->getExpires())]);
    }

    /**
     * @return WorkfrontAuthProvider|GenericProvider
     */
    private function getAuthProvider(): WorkfrontAuthProvider|GenericProvider
    {
        return new WorkfrontAuthProvider([
            'clientId' => config('services.workfront.client_id'),
            'clientSecret' => config('services.workfront.client_secret'),
            'redirectUri' => config('services.workfront.redirect_uri'),
        ]);
    }
}
