<?php

namespace Jetimob\NotaFacil\Api\Cities;

use GuzzleHttp\RequestOptions;
use Jetimob\NotaFacil\Api\AbstractApi;

/**
 * @link https://docs.notafacil.io/?version=latest#78685f6b-7986-4f0f-a1c6-32f54e5e5886
 */
class CitiesApi extends AbstractApi
{
    /**
     * Retorna uma lista paginada de cidades.
     *
     * @param ListCitiesParams|null $params
     * @link https://docs.notafacil.io/?version=latest#d06e764d-5c1b-4771-a68a-dfe061e18bb3
     * @return CitiesListResponse
     * @throws \JsonException
     * @throws \Throwable
     */
    public function list(?ListCitiesParams $params = null): CitiesListResponse
    {
        return $this->mappedGet('cidade', CitiesListResponse::class, [
            RequestOptions::QUERY => $params ? $params->toArray() : [],
        ]);
    }

    /**
     * Retorna uma lista paginada de cidades homologadas com os webservices.
     *
     * @param ListHomologatedCitiesParams|null $params
     * @link https://docs.notafacil.io/?version=latest#c301a526-8b6e-473c-b322-a4b8c96cb57f
     * @return HomologatedCitiesListResponse
     * @throws \JsonException
     * @throws \Throwable
     */
    public function homologated(?ListHomologatedCitiesParams $params = null): HomologatedCitiesListResponse
    {
        return $this->mappedGet('cidade/homologadas', HomologatedCitiesListResponse::class, [
            RequestOptions::QUERY => $params ? $params->toArray() : [],
        ]);
    }
}
