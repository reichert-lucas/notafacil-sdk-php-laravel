<?php

namespace Jetimob\NotaFacil\Api;

use Jetimob\NotaFacil\Entity\Links;
use Jetimob\NotaFacil\Entity\Meta;

abstract class PaginatedNotaFacilResponse extends NotaFacilResponse
{
    protected Links $links;
    protected Meta $meta;

    /**
     * @return Links
     */
    public function getLinks(): Links
    {
        return $this->links;
    }

    /**
     * @return Meta
     */
    public function getMeta(): Meta
    {
        return $this->meta;
    }

}
