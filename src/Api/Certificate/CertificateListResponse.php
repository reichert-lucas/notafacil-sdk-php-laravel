<?php

namespace Jetimob\NotaFacil\Api\Certificate;

use Jetimob\NotaFacil\Api\PaginatedNotaFacilResponse;
use Jetimob\NotaFacil\Entity\Certificate;

/**
 * @link https://docs.notafacil.io/?version=latest#4c086ffa-e28a-4832-b25a-408d8889d491
 */
class CertificateListResponse extends PaginatedNotaFacilResponse
{
    /** @var Certificate[] */
    protected array $data;

    /**
     * @return string
     */
    public function dataItemType(): string
    {
        return Certificate::class;
    }

    /**
     * @return Certificate[]
     */
    public function getCertificates(): array
    {
        return $this->data;
    }
}
