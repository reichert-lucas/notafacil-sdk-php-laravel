<?php

namespace Jetimob\NotaFacil\Api\Customer;

use Jetimob\NotaFacil\Api\NotaFacilResponse;
use Jetimob\NotaFacil\Entity\Customer;

class CustomerResponse extends NotaFacilResponse
{
    protected Customer $data;

    public function getClient(): Customer
    {
        return $this->data;
    }
}
