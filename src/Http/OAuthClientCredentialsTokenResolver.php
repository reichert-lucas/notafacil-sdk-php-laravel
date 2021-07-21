<?php

namespace Jetimob\NotaFacil\Http;

use GuzzleHttp\RequestOptions;
use Jetimob\Http\Authorization\OAuth\AccessToken;
use Jetimob\Http\Authorization\OAuth\OAuthClient;
use Jetimob\Http\Authorization\OAuth\TokenResolvers\OAuthTokenResolver;
use Jetimob\Http\Request;

class OAuthClientCredentialsTokenResolver extends OAuthTokenResolver
{
    public function resolveAccessToken(OAuthClient $client, ?string $credentials = null): AccessToken
    {
        $response = $this->http->send(new Request('post', $client->getTokenEndpoint()), [
            RequestOptions::HEADERS => [
                'Secret-Key' => $client->getClientSecret(),
            ],
            RequestOptions::JSON => [
                'login' => config('notafacil.login'),
                'password' => config('notafacil.password'),
            ],
        ]);

        return new AccessToken(
            json_decode(
                $response->getBody()->getContents(),
                true,
                512,
                JSON_THROW_ON_ERROR
            )['data'] ?? []
        );
    }
}
