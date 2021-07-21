<?php

namespace Jetimob\NotaFacil\Exceptions;

use GuzzleHttp\Exception\RequestException;
use Jetimob\Http\Contracts\HydratableContract;
use Jetimob\Http\Traits\Serializable;

class NotaFacilRequestException extends RequestException implements NotaFacilException, HydratableContract
{
    use Serializable;
}
