<?php

namespace Jetimob\NotaFacil\Entity;

use Jetimob\Http\Traits\Serializable;

class NfsTotal
{
    use Serializable;

    protected int $id;
    protected float $valor_servico;
    protected float $base_calculo;
    protected float $valor_deducoes;
    protected float $valor_incondicional;
    protected float $valor_condicional;
    protected float $aliquota_tributo_federal;
    protected float $valor_tributo_federal;
    protected float $aliquota_tributo_municipal;
    protected float $valor_tributo_municipal;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return float
     */
    public function getValorServico(): float
    {
        return $this->valor_servico;
    }

    /**
     * @return float
     */
    public function getBaseCalculo(): float
    {
        return $this->base_calculo;
    }

    /**
     * @return float
     */
    public function getValorDeducoes(): float
    {
        return $this->valor_deducoes;
    }

    /**
     * @return float
     */
    public function getValorIncondicional(): float
    {
        return $this->valor_incondicional;
    }

    /**
     * @return float
     */
    public function getValorCondicional(): float
    {
        return $this->valor_condicional;
    }

    /**
     * @return float
     */
    public function getAliquotaTributoFederal(): float
    {
        return $this->aliquota_tributo_federal;
    }

    /**
     * @return float
     */
    public function getValorTributoFederal(): float
    {
        return $this->valor_tributo_federal;
    }

    /**
     * @return float
     */
    public function getAliquotaTributoMunicipal(): float
    {
        return $this->aliquota_tributo_municipal;
    }

    /**
     * @return float
     */
    public function getValorTributoMunicipal(): float
    {
        return $this->valor_tributo_municipal;
    }
}
