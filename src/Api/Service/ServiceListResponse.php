<?php

namespace Jetimob\NotaFacil\Api\Service;

use Jetimob\NotaFacil\Api\PaginatedNotaFacilResponse;
use Jetimob\NotaFacil\Entity\Service;

class ServiceListResponse extends PaginatedNotaFacilResponse
{
    /** @var Service[] */
    protected array $data;

    public function dataItemType(): string
    {
        return Service::class;
    }

    /**
     * @return Service[]
     */
    public function getServices(): array
    {
        return $this->data;
    }
}
