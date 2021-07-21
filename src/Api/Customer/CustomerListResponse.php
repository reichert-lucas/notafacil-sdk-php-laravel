<?php

namespace Jetimob\NotaFacil\Api\Customer;

use Jetimob\NotaFacil\Api\PaginatedNotaFacilResponse;
use Jetimob\NotaFacil\Entity\Customer;

/**
 * @link https://docs.notafacil.io/?version=latest#e8224316-b00d-4d80-ac49-195a143ca0ff
 */
class CustomerListResponse extends PaginatedNotaFacilResponse
{
    /** @var Customer[] */
    protected array $data;

    /**
     * @return string
     */
    public function dataItemType(): string
    {
        return Customer::class;
    }

    /**
     * @return Customer[]
     */
    public function getClients(): array
    {
        return $this->data;
    }
}
