<?php

namespace Jetimob\NotaFacil\Api\Service;

use Jetimob\NotaFacil\Api\AbstractApi;

/**
 * @link https://docs.notafacil.io/?version=latest#3cc590fd-f48b-43fc-a250-ff6e8b44b8e2
 */
class ServiceApi extends AbstractApi
{
    /**
     * Retorna uma lista pagina de CNAES
     *
     * @return ServiceListResponse
     * @throws \JsonException
     * @throws \Throwable
     * @link https://docs.notafacil.io/?version=latest#afaf931f-2d3e-4535-a590-01783440bc8cc
     */
    public function listCnae(): ServiceListResponse
    {
        return $this->mappedGet('cnae', ServiceListResponse::class);
    }

    /**
     * @param int $cnaeId
     *
     * @return ServiceResponse
     * @throws \JsonException
     * @throws \Throwable
     * @link https://docs.notafacil.io/?version=latest#4d6c7ba4-8cad-431b-9ba1-e84efe4006fe
     */
    public function findCnae(int $cnaeId): ServiceResponse
    {
        return $this->mappedGet('cnae/id/' . $cnaeId, ServiceResponse::class);
    }

    /**
     * Retorna uma lista de serviços disponíveis
     *
     * @return ServiceListResponse
     * @throws \JsonException
     * @throws \Throwable
     * @link https://docs.notafacil.io/?version=latest#3ad64760-5324-4885-9c51-0e736940ca9c
     */
    public function list(): ServiceListResponse
    {
        return $this->mappedGet('servico', ServiceListResponse::class);
    }

    /**
     * @param int $serviceId
     *
     * @return ServiceResponse
     * @throws \JsonException
     * @throws \Throwable
     * @link https://docs.notafacil.io/?version=latest#d20ad095-c786-49a5-a927-abcd5a6d7233
     */
    public function find(int $serviceId): ServiceResponse
    {
        return $this->mappedGet('servico/id/' . $serviceId, ServiceResponse::class);
    }
}
