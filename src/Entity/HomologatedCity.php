<?php

namespace Jetimob\NotaFacil\Entity;

use Jetimob\Http\Traits\Serializable;

class HomologatedCity
{
    use Serializable;

    protected int $id;
    protected Webservice $webservice;
    protected City $cidade;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return Webservice
     */
    public function getWebservice(): Webservice
    {
        return $this->webservice;
    }

    /**
     * @return City
     */
    public function getCidade(): City
    {
        return $this->cidade;
    }
}
