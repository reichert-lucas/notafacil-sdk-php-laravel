<?php

namespace Jetimob\NotaFacil\Entity;

use Jetimob\Http\Traits\Serializable;

class Webservice
{
    use Serializable;

    protected int $id;
    protected string $padrao;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getPadrao(): string
    {
        return $this->padrao;
    }
}
