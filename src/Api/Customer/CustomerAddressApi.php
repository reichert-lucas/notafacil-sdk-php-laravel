<?php

namespace Jetimob\NotaFacil\Api\Customer;

use GuzzleHttp\Psr7\Response;
use GuzzleHttp\RequestOptions;
use Jetimob\NotaFacil\Api\AbstractApi;
use Jetimob\NotaFacil\Api\Business\DTO\AddressDTO;

/**
 * @link https://docs.notafacil.io/?version=latest#99aea9b8-e853-45b9-8a56-3a27e6b58d78
 */
class CustomerAddressApi extends AbstractApi
{
    /**
     * @param int        $customerId
     * @param AddressDTO $address
     *
     * @return CustomerAddressResponse
     * @throws \JsonException
     * @throws \Throwable
     * @link https://docs.notafacil.io/?version=latest#b9684f55-79c8-4eab-9f24-4ebbd0d08cf8
     */
    public function create(int $customerId, AddressDTO $address): CustomerAddressResponse
    {
        return $this->mappedPost("cliente/$customerId/enderecos/salvar", CustomerAddressResponse::class, [
            RequestOptions::JSON => $address->toArray(),
        ]);
    }

    /**
     * @param int        $customerId
     * @param int        $addressId
     * @param AddressDTO $address
     *
     * @return CustomerAddressResponse
     * @throws \JsonException
     * @throws \Throwable
     * @link https://docs.notafacil.io/?version=latest#91a1c1f9-d7f8-4090-ada7-d627be21ef29
     */
    public function update(int $customerId, int $addressId, AddressDTO $address): CustomerAddressResponse
    {
        return $this->mappedPut(
            "cliente/$customerId/enderecos/atualizar/$addressId",
            CustomerAddressResponse::class,
            [
                RequestOptions::JSON => $address->toArray(),
            ]
        );
    }

    /**
     * @param int $customerId
     * @param int $addressId
     *
     * @return Response
     * @throws \JsonException
     * @throws \Throwable
     * @link https://docs.notafacil.io/?version=latest#cf909c80-7d85-46aa-993b-ab873d009ec2
     */
    public function delete(int $customerId, int $addressId): Response
    {
        return $this->request('delete', "cliente/$customerId/enderecos/deletar/" . $addressId);
    }

    /**
     * @param int $customerId
     *
     * @return CustomerAddressListResponse
     * @throws \JsonException
     * @throws \Throwable
     * @link https://docs.notafacil.io/?version=latest#0d73538c-5d65-4804-a892-b00fbf5b0d7c
     */
    public function list(int $customerId): CustomerAddressListResponse
    {
        return $this->mappedGet("cliente/$customerId/enderecos/todos", CustomerAddressListResponse::class);
    }

    /**
     * @param int $customerId
     * @param int $addressId
     *
     * @return CustomerAddressResponse
     * @throws \JsonException
     * @throws \Throwable
     * @link https://docs.notafacil.io/?version=latest#2540f269-7649-4460-b40c-3048a5860ec7
     */
    public function find(int $customerId, int $addressId): CustomerAddressResponse
    {
        return $this->mappedGet("cliente/$customerId/enderecos/id/$addressId", CustomerAddressResponse::class);
    }
}
