<?php

namespace Jetimob\NotaFacil\Api\Service;

use Jetimob\NotaFacil\Api\NotaFacilResponse;
use Jetimob\NotaFacil\Entity\Service;

class ServiceResponse extends NotaFacilResponse
{
    protected Service $data;

    public function getService(): Service
    {
        return $this->data;
    }
}
