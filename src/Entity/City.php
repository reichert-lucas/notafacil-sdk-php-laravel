<?php

namespace Jetimob\NotaFacil\Entity;

use Jetimob\Http\Traits\Serializable;

class City
{
    use Serializable;

    protected int $id;
    protected string $nome;
    protected string $codigo_ibge;
    protected string $ddd;
    protected State $estado;

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
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @return string
     */
    public function getCodigoIbge(): string
    {
        return $this->codigo_ibge;
    }

    /**
     * @return string
     */
    public function getDdd(): string
    {
        return $this->ddd;
    }

    /**
     * @return State
     */
    public function getEstado(): State
    {
        return $this->estado;
    }
}
