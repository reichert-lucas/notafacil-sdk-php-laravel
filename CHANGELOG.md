# Changelog

All notable changes to this project will be documented in this file. See [standard-version](https://github.com/conventional-changelog/standard-version) for commit guidelines.

## [2.0.0](https://github.com/jetimob/notafacil-sdk-php-laravel/compare/v1.1.0...v2.0.0) (2022-01-13)


### ⚠ BREAKING CHANGES

* corrige o tipo da propriedade `cliente` em `NfseDTO`

### Features

* adiciona constantes com os tipos de imposto permitidos ([31c4ffa](https://github.com/jetimob/notafacil-sdk-php-laravel/commit/31c4ffa2ce28ec5edaf8cebf818fc4bba13cee6e))
* adiciona constantes com os valores permitidos para `$tipo_cliente` e `$tipo_cadastro` ([9222030](https://github.com/jetimob/notafacil-sdk-php-laravel/commit/92220304f20d2dfa786960d95dfc90f7414d99ee))


### Bug Fixes

* adiciona `NfseApi` ao array de apis ([db07c93](https://github.com/jetimob/notafacil-sdk-php-laravel/commit/db07c93a73ac9498a532536e792aec2eeadffbdb))
* corrige o tipo da propriedade `cliente` em `NfseDTO` ([804149d](https://github.com/jetimob/notafacil-sdk-php-laravel/commit/804149d26a52ab92e53e9b8c27a0a32772c99b3f))

## [1.1.0](https://github.com/jetimob/notafacil-sdk-php-laravel/compare/v1.0.1...v1.1.0) (2021-12-02)


### Features

* adiciona `OAuthClientResolver` que não requer client_id ([3eceb94](https://github.com/jetimob/notafacil-sdk-php-laravel/commit/3eceb94eda9851930b394cf61ce1483cddf3910b))
* adiciona exceções específicas de autenticação ([c546565](https://github.com/jetimob/notafacil-sdk-php-laravel/commit/c546565719228c46ee59b098f3890e23242faa63))


### Bug Fixes

* atualiza base_uri e oauth_token_uri dos servidores de staging e production ([d3e2288](https://github.com/jetimob/notafacil-sdk-php-laravel/commit/d3e228814a0db5038fd1142d51606ced7ae412ad))
* atualiza namespace do `AddressDTO` ([2629984](https://github.com/jetimob/notafacil-sdk-php-laravel/commit/262998408d06656c46317ff9de64a5a49536166a))
* atualiza propriedades para nullable ([f9f3255](https://github.com/jetimob/notafacil-sdk-php-laravel/commit/f9f3255d75e8540a8327663ec250eb7ce905b07d))

### 1.0.1 (2021-12-01)
