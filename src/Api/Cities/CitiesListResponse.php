<?php

namespace Jetimob\NotaFacil\Api\Cities;

use Jetimob\NotaFacil\Api\NotaFacilResponse;
use Jetimob\NotaFacil\Entity\City;

class CitiesListResponse extends NotaFacilResponse
{
    /** @var City[] $data */
    protected array $data;

    public function dataItemType(): string
    {
        return City::class;
    }

    /**
     * @return City[]
     */
    public function getCities(): array
    {
        return $this->data;
    }
}
