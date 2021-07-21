<?php

namespace Jetimob\NotaFacil\Entity;

use Jetimob\Http\Traits\Serializable;

class Service
{
    use Serializable;

    protected int $id;
    protected string $codigo;
    protected string $descricao;

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
    public function getCodigo(): string
    {
        return $this->codigo;
    }

    /**
     * @return string
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }
}
