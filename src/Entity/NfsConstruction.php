<?php

namespace Jetimob\NotaFacil\Entity;

use Jetimob\Http\Traits\Serializable;

class NfsConstruction
{
    use Serializable;

    protected int $id;
    protected string $codigo_obra;
    protected string $codigo_art;
    protected float $valor_material;

    /**
     * @return string
     */
    public function getCodigoObra(): string
    {
        return $this->codigo_obra;
    }

    /**
     * @return string
     */
    public function getCodigoArt(): string
    {
        return $this->codigo_art;
    }

    /**
     * @return float
     */
    public function getValorMaterial(): float
    {
        return $this->valor_material;
    }
}
