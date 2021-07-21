<?php

namespace Jetimob\NotaFacil\Api\Customer;

use Jetimob\NotaFacil\Api\PaginatedNotaFacilResponse;
use Jetimob\NotaFacil\Entity\Address;

/**
 * @link https://docs.notafacil.io/?version=latest#2540f269-7649-4460-b40c-3048a5860ec7
 */
class CustomerAddressListResponse extends PaginatedNotaFacilResponse
{
    /** @var Address[] */
    protected array $data;

    /**
     * @return string
     */
    public function dataItemType(): string
    {
        return Address::class;
    }

    /**
     * @return Address[]
     */
    public function getAddresses(): array
    {
        return $this->data;
    }
}
