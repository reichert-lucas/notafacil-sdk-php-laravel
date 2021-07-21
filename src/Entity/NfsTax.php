<?php

namespace Jetimob\NotaFacil\Entity;

use Jetimob\Http\Traits\Serializable;

class NfsTax
{
    use Serializable;

    protected int $id;
    protected string $tipo;
    protected bool $reter;
    protected float $aliquota;
    protected float $valor;

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
    public function getTipo(): string
    {
        return $this->tipo;
    }

    /**
     * @return bool
     */
    public function isReter(): bool
    {
        return $this->reter;
    }

    /**
     * @return float
     */
    public function getAliquota(): float
    {
        return $this->aliquota;
    }

    /**
     * @return float
     */
    public function getValor(): float
    {
        return $this->valor;
    }
}
