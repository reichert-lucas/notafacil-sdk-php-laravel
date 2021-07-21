<?php

namespace Jetimob\NotaFacil\Entity;

use Jetimob\Http\Traits\Serializable;

class State
{
    use Serializable;

    protected int $id;
    protected string $sigla;
    protected string $estado;
    protected string $codigo_ibge;

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
    public function getSigla(): string
    {
        return $this->sigla;
    }

    /**
     * @return string
     */
    public function getEstado(): string
    {
        return $this->estado;
    }

    /**
     * @return string
     */
    public function getCodigoIbge(): string
    {
        return $this->codigo_ibge;
    }
}
