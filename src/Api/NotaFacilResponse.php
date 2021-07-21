<?php

namespace Jetimob\NotaFacil\Api;

use Jetimob\Http\Response;
use Jetimob\NotaFacil\Entity\Header;

abstract class NotaFacilResponse extends Response
{
    protected Header $header;

    /**
     * @return Header
     */
    public function getApiHeader(): Header
    {
        return $this->header;
    }
}
