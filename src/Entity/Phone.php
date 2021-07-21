<?php

namespace Jetimob\NotaFacil\Entity;

use Jetimob\Http\Traits\Serializable;

class Phone
{
    use Serializable;

    protected int $id;
    protected string $ddd;
    protected string $numero;
    protected ?string $ramal = null;
    protected int $tipo_telefone;

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
    public function getDdd(): string
    {
        return $this->ddd;
    }

    /**
     * @return string
     */
    public function getNumero(): string
    {
        return $this->numero;
    }

    /**
     * @return string|null
     */
    public function getRamal(): ?string
    {
        return $this->ramal;
    }

    /**
     * @return int
     */
    public function getTipoTelefone(): int
    {
        return $this->tipo_telefone;
    }
}
