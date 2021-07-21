<?php

namespace Jetimob\NotaFacil\Api\Customer;

use Jetimob\NotaFacil\Api\NotaFacilResponse;
use Jetimob\NotaFacil\Entity\Address;

class CustomerAddressResponse extends NotaFacilResponse
{
    protected Address $data;

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->data;
    }
}
