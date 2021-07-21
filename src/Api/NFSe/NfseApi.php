<?php

namespace Jetimob\NotaFacil\Api\NFSe;

use GuzzleHttp\Psr7\Response;
use GuzzleHttp\RequestOptions;
use Jetimob\NotaFacil\Api\AbstractApi;
use Jetimob\NotaFacil\Api\NFSe\DTO\NfseDTO;

/**
 * @link https://docs.notafacil.io/?version=latest#6702fdfe-a199-4c63-9aec-13950645970c
 */
class NfseApi extends AbstractApi
{
    /**
     * @param NfseDTO $nfse
     *
     * @return NfseResponse
     * @throws \JsonException
     * @throws \Throwable
     * @link https://docs.notafacil.io/?version=latest#fbf56aa3-860e-499f-8a5c-fe940fb3f494
     */
    public function create(NfseDTO $nfse): NfseResponse
    {
        return $this->mappedPost('nfse/salvar', NfseResponse::class, [
            RequestOptions::JSON => $nfse->toArray(),
        ]);
    }

    /**
     * @param int     $nfseId
     * @param NfseDTO $nfse
     *
     * @return NfseResponse
     * @throws \JsonException
     * @throws \Throwable
     * @link https://docs.notafacil.io/?version=latest#128169df-3ce0-4f66-8fef-3f78018ae829
     */
    public function update(int $nfseId, NfseDTO $nfse): NfseResponse
    {
        return $this->mappedPut("nfse/atualizar/$nfseId", NfseResponse::class, [
            RequestOptions::JSON => $nfse->toArray(),
        ]);
    }

    /**
     * @param int $nfseId
     *
     * @return Response
     * @throws \JsonException
     * @throws \Throwable
     * @link https://docs.notafacil.io/?version=latest#2aef3398-e5ef-42cf-9736-a43cb0c1c1de
     */
    public function delete(int $nfseId): Response
    {
        return $this->request('delete', "nfse/deletar/$nfseId");
    }

    public function emit(array $ids)
    {
        return $this->mappedPost('nfse/emitir', '', [
            RequestOptions::JSON => [
                'ids' => $ids,
            ],
        ]);
    }

    public function cancel()
    {
    }

    /**
     * @return NfseListResponse
     * @throws \JsonException
     * @throws \Throwable
     * @link https://docs.notafacil.io/?version=latest#c3275066-3e63-4304-9dae-89602976ff80
     */
    public function list(): NfseListResponse
    {
        return $this->mappedGet('nfse', NfseListResponse::class);
    }

    /**
     * @param int $nfseId
     *
     * @return NfseResponse
     * @throws \JsonException
     * @throws \Throwable
     * @link https://docs.notafacil.io/?version=latest#c9edd5e0-cb6f-4305-a32c-4197892f67c5
     */
    public function find(int $nfseId): NfseResponse
    {
        return $this->mappedGet("nfse/id/$nfseId", NfseResponse::class);
    }
}
