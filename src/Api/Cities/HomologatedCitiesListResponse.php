<?php

namespace Jetimob\NotaFacil\Api\Cities;

use Jetimob\NotaFacil\Api\PaginatedNotaFacilResponse;
use Jetimob\NotaFacil\Entity\HomologatedCity;

class HomologatedCitiesListResponse extends PaginatedNotaFacilResponse
{
    /** @var HomologatedCity[] $data */
    protected array $data;

    public function dataItemType(): string
    {
        return HomologatedCity::class;
    }

    /**
     * @return HomologatedCity[]
     */
    public function getCities(): array
    {
        return $this->data;
    }
}
