<?php

namespace Jetimob\NotaFacil\Http;

use GuzzleHttp\RequestOptions;
use Jetimob\Http\Authorization\OAuth\AccessToken;
use Jetimob\Http\Authorization\OAuth\OAuthClient;
use Jetimob\Http\Authorization\OAuth\TokenResolvers\OAuthTokenResolver;
use Jetimob\Http\Request;
use Jetimob\NotaFacil\Exceptions\NotaFacilAuthenticationException;
use Jetimob\NotaFacil\Exceptions\NotaFacilResponseException;

class OAuthClientCredentialsTokenResolver extends OAuthTokenResolver
{
    public function resolveAccessToken(OAuthClient $client, ?string $credentials = null): AccessToken
    {
        $request = new Request('post', $client->getTokenEndpoint());

        $response = $this->http->send($request, [
            RequestOptions::HEADERS => [
                'Secret-Key' => $client->getClientSecret(),
            ],
            RequestOptions::JSON => [
                'login' => config('notafacil.login'),
                'password' => config('notafacil.password'),
            ],
        ]);

        $responseContents = $response->getBody()->getContents();

        try {
            $jsonAccessToken = json_decode($responseContents, true, 512, JSON_THROW_ON_ERROR);
        } catch (\Throwable $e) {
            throw new NotaFacilResponseException('Erro ao deserializar resposta HTTP', $request, $response, $e);
        }

        if (!($jsonAccessToken['success'] ?? false)) {
            throw (new NotaFacilAuthenticationException('Falha de autenticação', $request, $response))
                ->hydrate($jsonAccessToken);
        }

        return new AccessToken($jsonAccessToken['data'] ?? []);
    }
}
