<?php

namespace Jetimob\NotaFacil\Api\Certificate;

use GuzzleHttp\Psr7\Response;
use GuzzleHttp\RequestOptions;
use Jetimob\NotaFacil\Api\AbstractApi;

/**
 * @link https://docs.notafacil.io/?version=latest#64a43cd1-dc43-4fe5-87bc-69800c4769c0
 */
class CertificateApi extends AbstractApi
{
    /**
     * @param string $b64encoded Base 64 do certificado
     * @param string $password Senha do certificado
     * @param string $type Tipo do certificado: A1
     *
     * @return CertificateResponse
     * @throws \JsonException
     * @throws \Throwable
     */
    public function create(string $b64encoded, string $password, string $type): CertificateResponse
    {
        return $this->mappedPost('certificado/salvar', CertificateResponse::class, [
            RequestOptions::JSON => [
                'certificado_base64' => $b64encoded,
                'certificado_senha' => $password,
                'certificado_tipo' => $type,
            ],
        ]);
    }

    /**
     * @param int $certificateId
     *
     * @return Response
     * @throws \JsonException
     * @throws \Throwable
     * @link https://docs.notafacil.io/?version=latest#14f670c4-abcb-450f-815b-5b893c4e1f15
     */
    public function delete(int $certificateId): Response
    {
        return $this->request('delete', "certificado/deletar/$certificateId");
    }

    /**
     * @return CertificateListResponse
     * @throws \JsonException
     * @throws \Throwable
     * @link https://docs.notafacil.io/?version=latest#4c086ffa-e28a-4832-b25a-408d8889d491
     */
    public function list(): CertificateListResponse
    {
        return $this->mappedGet('certificado/todos', CertificateListResponse::class);
    }

    /**
     * @param int $certificateId
     *
     * @return CertificateResponse
     * @throws \JsonException
     * @throws \Throwable
     * @link https://docs.notafacil.io/?version=latest#cc3c5489-69b0-4e82-87fe-e0fd87df2295
     */
    public function find(int $certificateId): CertificateResponse
    {
        return $this->mappedGet("certificado/id/$certificateId", CertificateResponse::class);
    }
}
