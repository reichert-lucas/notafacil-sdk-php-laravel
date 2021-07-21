<?php

namespace Jetimob\NotaFacil\Api\Business;

use GuzzleHttp\Psr7\Response;
use GuzzleHttp\RequestOptions;
use Jetimob\NotaFacil\Api\AbstractApi;
use Jetimob\NotaFacil\Api\Business\DTO\BusinessConfigDTO;
use Jetimob\NotaFacil\Api\Business\DTO\BusinessDTO;

/**
 * @link https://docs.notafacil.io/?version=latest#2aba3806-dfff-486a-9c37-977e76dd8aa9
 */
class BusinessApi extends AbstractApi
{
    /**
     * Retorna os dados da empresa logada.
     *
     * @link https://docs.notafacil.io/?version=latest#7f569ee3-d5d8-4ae7-b39a-52bd3f2d30c1
     *
     * @return BusinessResponse
     * @throws \JsonException
     * @throws \Throwable
     */
    public function authenticated(): BusinessResponse
    {
        return $this->mappedGet('empresa/logada', BusinessResponse::class);
    }

    /**
     * Retorna os dados de uma empresa.
     *
     * @link https://docs.notafacil.io/?version=latest#88011792-3d8a-4071-8077-6cc1a00650d2
     *
     * @param string $id
     *
     * @return BusinessResponse
     * @throws \JsonException
     * @throws \Throwable
     */
    public function findById(string $id): BusinessResponse
    {
        return $this->mappedGet('empresa/id/' . $id, BusinessResponse::class);
    }

    /**
     * Retorna uma lista pagina de empresas
     *
     * @return BusinessListResponse
     * @throws \JsonException
     * @throws \Throwable
     * @link https://docs.notafacil.io/?version=latest#516b232d-e6ba-458a-969e-bc50eb29c7cb
     */
    public function list(): BusinessListResponse
    {
        return $this->mappedGet('empresa/todos', BusinessListResponse::class);
    }

    /**
     * @param BusinessDTO $business
     *
     * @return BusinessResponse
     * @throws \JsonException
     * @throws \Throwable
     * @link https://docs.notafacil.io/?version=latest#ef2abd18-5d60-4894-b2e2-2710cf927f99
     *
     */
    public function create(BusinessDTO $business): BusinessResponse
    {
        return $this->mappedPost('empresa/salvar', BusinessResponse::class, [
            RequestOptions::JSON => $business->toArray(),
        ]);
    }

    /**
     * @param int         $businessId
     * @param BusinessDTO $business
     *
     * @return BusinessResponse
     * @throws \JsonException
     * @throws \Throwable
     * @link https://docs.notafacil.io/?version=latest#b94b7bc5-b29c-42be-aa6c-611839317a3b
     */
    public function update(int $businessId, BusinessDTO $business): BusinessResponse
    {
        return $this->mappedPut('empresa/atualizar/' . $businessId, BusinessResponse::class, [
            RequestOptions::JSON => $business->toArray(),
        ]);
    }

    /**
     * @param string $id
     *
     * @return Response
     * @throws \JsonException
     * @throws \Throwable
     * @link https://docs.notafacil.io/?version=latest#fb9a05b8-a83a-4a2f-b4cc-66b69af3d8c3
     *
     */
    public function delete(string $id): Response
    {
        return $this->request('delete', 'empresa/deletar/' . $id);
    }

    /**
     * @param BusinessConfigDTO $config
     *
     * @return BusinessResponse
     * @throws \JsonException
     * @throws \Throwable
     * @link https://docs.notafacil.io/?version=latest#34b5deec-a6f6-44b9-9bd5-b37b9bf5ae7b
     */
    public function config(BusinessConfigDTO $config): BusinessResponse
    {
        return $this->mappedPost('empresa/config', BusinessResponse::class, [
            RequestOptions::JSON => $config->toArray(),
        ]);
    }
}
