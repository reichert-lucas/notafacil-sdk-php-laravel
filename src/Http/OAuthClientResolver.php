<?php

namespace Jetimob\NotaFacil\Http;

use Jetimob\Http\Authorization\OAuth\ClientProviders\OAuthClientResolverInterface;
use Jetimob\Http\Authorization\OAuth\OAuthClient;
use Jetimob\Http\Exceptions\InvalidArgumentException;

class OAuthClientResolver implements OAuthClientResolverInterface
{
    public function resolveClient(array $config): OAuthClient
    {
        $extract = static function (
            string $key,
            ?string $envKey = null,
            $required = true,
            $default = null,
            $normalizer = null
        ) use ($config) {
            if (is_null($envKey)) {
                $envKey = $key;
            }

            $value = $config[$key] ?? env($envKey);

            if (empty($value)) {
                if ($required) {
                    throw new InvalidArgumentException("Missing required configuration key \"$key\"");
                }

                return $default;
            }

            if (!is_null($normalizer)) {
                $value = $normalizer($value);
            }

            return $value;
        };

        $clientId = '-';
        $clientSecret = $extract('oauth_client_secret', 'OAUTH_CLIENT_SECRET');
        $urlAccessToken = $extract('oauth_token_uri', 'OAUTH_TOKEN_URI');

        return new OAuthClient(
            $clientId,
            $clientSecret,
            $urlAccessToken
        );
    }
}
