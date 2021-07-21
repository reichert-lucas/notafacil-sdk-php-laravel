<?php

namespace Jetimob\NotaFacil\Api\Customer;

use Jetimob\NotaFacil\Api\PaginatedNotaFacilResponse;
use Jetimob\NotaFacil\Entity\Phone;

/**
 * @link https://docs.notafacil.io/?version=latest#f4f97fcd-cbdd-4033-92a1-8efc792e3a09
 */
class CustomerPhoneListResponse extends PaginatedNotaFacilResponse
{
    /** @var Phone[] */
    protected array $data;

    /**
     * @return string
     */
    public function dataItemType(): string
    {
        return Phone::class;
    }

    /**
     * @return Phone[]
     */
    public function getPhones(): array
    {
        return $this->data;
    }
}
