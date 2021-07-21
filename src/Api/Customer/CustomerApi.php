<?php

namespace Jetimob\NotaFacil\Api\Customer;

use GuzzleHttp\Psr7\Response;
use GuzzleHttp\RequestOptions;
use Jetimob\NotaFacil\Api\AbstractApi;
use Jetimob\NotaFacil\Api\Customer\DTO\CustomerDTO;

/**
 * @link https://docs.notafacil.io/?version=latest#33d57ef9-bda2-4dd0-9821-9d05a1517bbf
 */
class CustomerApi extends AbstractApi
{
    /**
     * @param CustomerDTO $client
     *
     * @return CustomerResponse
     * @throws \JsonException
     * @throws \Throwable
     * @link https://docs.notafacil.io/?version=latest#6705ada3-e23a-4ffd-8369-52e92ac23bcd
     */
    public function create(CustomerDTO $client): CustomerResponse
    {
        return $this->mappedPost('cliente/salvar', CustomerResponse::class, [
            RequestOptions::JSON => $client->toArray(),
        ]);
    }

    /**
     * @param int         $customerId
     * @param CustomerDTO $client
     *
     * @return CustomerResponse
     * @throws \JsonException
     * @throws \Throwable
     * @link https://docs.notafacil.io/?version=latest#4a83cbee-6f53-4161-91b3-c327971cc796
     */
    public function update(int $customerId, CustomerDTO $client): CustomerResponse
    {
        return $this->mappedPut("cliente/atualizar/$customerId", CustomerResponse::class, [
            RequestOptions::JSON => $client->toArray(),
        ]);
    }

    /**
     * @param int $customerId
     *
     * @return Response
     * @throws \JsonException
     * @throws \Throwable
     * @Link https://docs.notafacil.io/?version=latest#09a89037-ab70-4e2e-a673-ddc8bd2c6ff1+
     */
    public function delete(int $customerId): Response
    {
        return $this->request('delete', "cliente/deletar/$customerId");
    }

    /**
     * Retorna uma lista paginada de clientes
     *
     * @return CustomerListResponse
     * @throws \JsonException
     * @throws \Throwable
     * @link https://docs.notafacil.io/?version=latest#e8224316-b00d-4d80-ac49-195a143ca0ff
     */
    public function list(): CustomerListResponse
    {
        return $this->mappedGet('cliente/todos', CustomerListResponse::class);
    }

    /**
     * Retorna os dados do cliente
     *
     * @param int $customerId
     *
     * @return CustomerResponse
     * @throws \JsonException
     * @throws \Throwable
     * @link https://docs.notafacil.io/?version=latest#6de2cf54-ad17-4ad8-b392-168ee8d5998c
     */
    public function find(int $customerId): CustomerResponse
    {
        return $this->mappedGet("cliente/id/$customerId", CustomerResponse::class);
    }
}
