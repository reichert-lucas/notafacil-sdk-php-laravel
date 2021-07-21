<?php

namespace Jetimob\NotaFacil\Api\Business;

use Jetimob\NotaFacil\Api\PaginatedNotaFacilResponse;
use Jetimob\NotaFacil\Entity\Business;

/**
 * @link https://docs.notafacil.io/?version=latest#516b232d-e6ba-458a-969e-bc50eb29c7cb
 */
class BusinessListResponse extends PaginatedNotaFacilResponse
{
    /** @var Business[] */
    protected array $data;

    /**
     * @return string
     */
    public function dataItemType(): string
    {
        return Business::class;
    }

    /**
     * @return Business[]
     */
    public function getBusinesses(): array
    {
        return $this->data;
    }
}
