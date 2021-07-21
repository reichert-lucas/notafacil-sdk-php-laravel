<?php

namespace Jetimob\NotaFacil\Api\Customer;

use Jetimob\NotaFacil\Api\NotaFacilResponse;
use Jetimob\NotaFacil\Entity\Phone;

class CustomerPhoneResponse extends NotaFacilResponse
{
    protected Phone $data;

    /**
     * @return Phone
     */
    public function getPhone(): Phone
    {
        return $this->data;
    }
}
