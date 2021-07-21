<?php

namespace Jetimob\NotaFacil\Api\Customer;

use GuzzleHttp\Psr7\Response;
use GuzzleHttp\RequestOptions;
use Jetimob\NotaFacil\Api\AbstractApi;
use Jetimob\NotaFacil\Api\DTO\PhoneDTO;

/**
 * @link https://docs.notafacil.io/?version=latest#5a39f12e-3531-4ea1-bc34-1e4a6d9f9c69
 */
class CustomerPhoneApi extends AbstractApi
{
    /**
     * @param int      $customerId
     * @param PhoneDTO $phone
     *
     * @return CustomerPhoneResponse
     * @throws \JsonException
     * @throws \Throwable
     * @link https://docs.notafacil.io/?version=latest#e25c335c-cbc4-4328-b287-d819259ac064
     */
    public function create(int $customerId, PhoneDTO $phone): CustomerPhoneResponse
    {
        return $this->mappedPost("cliente/$customerId/telefones/salvar", CustomerPhoneResponse::class, [
            RequestOptions::JSON => $phone->toArray(),
        ]);
    }

    /**
     * @param int      $customerId
     * @param int      $phoneId
     * @param PhoneDTO $phone
     *
     * @return CustomerPhoneResponse
     * @throws \JsonException
     * @throws \Throwable
     * @link https://docs.notafacil.io/?version=latest#e6d23996-7f3f-4990-9a60-d0d59803ecc6
     */
    public function update(int $customerId, int $phoneId, PhoneDTO $phone): CustomerPhoneResponse
    {
        return $this->mappedPut("cliente/$customerId/telefones/atualizar/$phoneId", CustomerPhoneResponse::class, [
            RequestOptions::JSON => $phone->toArray(),
        ]);
    }

    /**
     * @param int $customerId
     * @param int $phoneId
     *
     * @return Response
     * @throws \JsonException
     * @throws \Throwable
     * @link https://docs.notafacil.io/?version=latest#39b2406f-e060-44ff-ae4a-2eff0ebf1051
     */
    public function delete(int $customerId, int $phoneId): Response
    {
        return $this->request('delete', "cliente/$customerId/telefones/deletar/$phoneId");
    }

    /**
     * @param int $customerId
     *
     * @return CustomerPhoneResponse
     * @throws \JsonException
     * @throws \Throwable
     * @link https://docs.notafacil.io/?version=latest#f4f97fcd-cbdd-4033-92a1-8efc792e3a09
     */
    public function list(int $customerId): CustomerPhoneResponse
    {
        return $this->mappedGet("cliente/$customerId/telefones/todos", CustomerPhoneResponse::class);
    }

    /**
     * @param int $customerId
     * @param int $phoneId
     *
     * @return CustomerPhoneResponse
     * @throws \JsonException
     * @throws \Throwable
     * @link https://docs.notafacil.io/?version=latest#7a5df3f6-9e64-4784-b8d0-3e35e9350973
     */
    public function find(int $customerId, int $phoneId): CustomerPhoneResponse
    {
        return $this->mappedGet("cliente/$customerId/telefones/id/$phoneId", CustomerPhoneResponse::class);
    }
}
