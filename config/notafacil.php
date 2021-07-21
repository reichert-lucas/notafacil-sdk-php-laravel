<?php

/*
 |--------------------------------------------------------------------------
 | ENDPOINTS
 |--------------------------------------------------------------------------
 |
 |
 */
$endpoints = [
    'sandbox' => [
        'base_uri' => 'https://api.notafacil.io/v1/',
        'oauth_token_uri' => 'https://api.notafacil.io/v1/auth/login',
    ],
    'production' => [
        'base_uri' => 'https://api.juno.com.br/',
        'oauth_token_uri' => 'https://api.juno.com.br/authorization-server/oauth/token',
    ],
];
return [
    'login' => env('NOTAFACIL_LOGIN'),
    'password' => env('NOTAFACIL_PASSWORD'),

    'http' => [
        /*
        |--------------------------------------------------------------------------
        | Client ID
        |--------------------------------------------------------------------------
        |
        |
        */

        'oauth_client_id' => env('NOTAFACIL_CLIENT_ID', '__'),

        /*
        |--------------------------------------------------------------------------
        | Client Secret
        |--------------------------------------------------------------------------
        |
        |
        */

        'oauth_client_secret' => env('NOTAFACIL_CLIENT_SECRET'),


        /*
        |--------------------------------------------------------------------------
        | Retries
        |--------------------------------------------------------------------------
        |
        | Quantas vezes uma requisição pode ser reexecutada (em caso de falha) antes de gerar uma exceção.
        |
        */

        'retries' => 0,

        /*
        |--------------------------------------------------------------------------
        | Retry On Status Code
        |--------------------------------------------------------------------------
        |
        | Em quais códigos HTTP de uma resposta falha podemos tentar reexecutar a requisição.
        |
        */

        'retry_on_status_code' => [],

        /*
        |--------------------------------------------------------------------------
        | Retry Delay
        |--------------------------------------------------------------------------
        |
        | Antes de tentar reexecutar uma requisição falha, aguardar em ms.
        |
        */

        'retry_delay' => 2000,

        /*
        |--------------------------------------------------------------------------
        | Guzzle
        |--------------------------------------------------------------------------
        |
        | Configurações passadas à instância do Guzzle.
        | @link https://docs.guzzlephp.org/en/stable/request-options.html
        |
        */

        'guzzle' => [
            'base_uri' => $endpoints[env('NOTAFACIL_ENVIRONMENT', 'sandbox')]['base_uri'],

            /*
            |--------------------------------------------------------------------------
            | Connect Timeout
            |--------------------------------------------------------------------------
            |
            | Quantos segundos esperar por uma conexão com o servidor da Juno. 0 significa sem limite de espera.
            | https://docs.guzzlephp.org/en/stable/request-options.html#connect-timeout
            |
            */

            'connect_timeout' => 10.0,

            /*
            |--------------------------------------------------------------------------
            | Timeout
            |--------------------------------------------------------------------------
            |
            | Quantos segundos esperar pela resposta do servidor. 0 significa sem limite de espera.
            | @link https://docs.guzzlephp.org/en/stable/request-options.html#timeout
            |
            */

            'timeout' => 0.0,

            /*
            |--------------------------------------------------------------------------
            | Debug
            |--------------------------------------------------------------------------
            |
            | Usar true para ativar o modo debug do Guzzle.
            | @link https://docs.guzzlephp.org/en/stable/request-options.html#debug
            |
            */

            'debug' => true,

            /*
            |--------------------------------------------------------------------------
            | Middlewares
            |--------------------------------------------------------------------------
            |
            | @link https://docs.guzzlephp.org/en/stable/handlers-and-middleware.html#middleware
            |
            */

            'middlewares' => [
                \Jetimob\Http\Middlewares\OAuthRequestMiddleware::class,
            ],

            /*
            |--------------------------------------------------------------------------
            | Headers
            |--------------------------------------------------------------------------
            |
            | Headers de requisição.
            | @link https://docs.guzzlephp.org/en/stable/request-options.html#headers
            |
            */

            'headers' => [
                // Versão da API da Juno
                'X-Api-Version' => 2,
            ],
        ],

        /*
        |--------------------------------------------------------------------------
        | OAuth Access Token Repository
        |--------------------------------------------------------------------------
        |
        | Essa classe é responsável por gerenciar os AccessTokens. Por padrão ela utiliza o repositório de cache padrão.
        |
        | PRECISA implementar \Jetimob\Http\Authorization\OAuth\Storage\CacheRepositoryContract
        */

        'oauth_access_token_repository' => \Jetimob\Http\Authorization\OAuth\Storage\CacheRepository::class,

        /*
        |--------------------------------------------------------------------------
        | OAuth Token Cache Key Resolver
        |--------------------------------------------------------------------------
        |
        | Classe responsável por gerar uma chave de identificação única para o cliente OAuth.
        |
        | PRECISA implementar \Jetimob\Http\Authorization\OAuth\Storage\AccessTokenCacheKeyResolverInterface
        */

        'oauth_token_cache_key_resolver' =>
            \Jetimob\Http\Authorization\OAuth\Storage\AccessTokenCacheKeyResolver::class,

        /*
        |--------------------------------------------------------------------------
        | OAuth Client Resolver
        |--------------------------------------------------------------------------
        |
        | Classe responsável por resolver o client OAuth.
        |
        | PRECISA implementar \Jetimob\Http\Authorization\OAuth\ClientProviders\OAuthClientResolverInterface
        */

        'oauth_client_resolver' => \Jetimob\Http\Authorization\OAuth\ClientProviders\OAuthClientResolver::class,

        'oauth_access_token_resolver' => [
            \Jetimob\Http\Authorization\OAuth\OAuthFlow::CLIENT_CREDENTIALS =>
                \Jetimob\NotaFacil\Http\OAuthClientCredentialsTokenResolver::class,
        ],

        'oauth_token_uri' => $endpoints[env('NOTAFACIL_ENVIRONMENT', 'sandbox')]['oauth_token_uri'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Implementação dos endpoints da API
    |--------------------------------------------------------------------------
    |
    | Escolheu-se dar a opção de sobrescrever a implementação de um endpoint para que, se necessário, possam ser
    | modificados sem a necessidade de alterar o pacote original.
    |
    | A única obrigatoriedade é que a classe estenda \Jetimob\Juno\Api\AbstractApi.
    |
    | Chaves também podem ser adicionadas neste vetor e assim serem chamadas direto da facade.
    |
    */

    'api_impl' => [
        'cities' => \Jetimob\NotaFacil\Api\Cities\CitiesApi::class,
        'business' => \Jetimob\NotaFacil\Api\Business\BusinessApi::class,
        'user' => \Jetimob\NotaFacil\Api\User\UserApi::class,
        'service' => \Jetimob\NotaFacil\Api\Service\ServiceApi::class,
        'client' => \Jetimob\NotaFacil\Api\Customer\CustomerApi::class,
        'clientAddress' => \Jetimob\NotaFacil\Api\Customer\CustomerAddressApi::class,
        'clientPhone' => \Jetimob\NotaFacil\Api\Customer\CustomerPhoneApi::class,
        'certificate' => \Jetimob\NotaFacil\Api\Certificate\CertificateApi::class,
    ],
];
