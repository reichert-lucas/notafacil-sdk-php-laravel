<?php

namespace Jetimob\NotaFacil\Api\Certificate;

use Jetimob\NotaFacil\Api\NotaFacilResponse;
use Jetimob\NotaFacil\Entity\Certificate;

class CertificateResponse extends NotaFacilResponse
{
    protected Certificate $data;

    /**
     * @return Certificate
     */
    public function getCertificate(): Certificate
    {
        return $this->data;
    }
}
