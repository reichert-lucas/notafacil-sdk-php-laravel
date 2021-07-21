<?php

namespace Jetimob\NotaFacil\Api\Business;

use Jetimob\NotaFacil\Api\NotaFacilResponse;
use Jetimob\NotaFacil\Entity\Business;

class BusinessResponse extends NotaFacilResponse
{
    protected Business $data;

    /**
     * @return Business
     */
    public function getBusiness(): Business
    {
        return $this->data;
    }
}
