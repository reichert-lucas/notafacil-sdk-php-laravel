<?php

namespace Jetimob\NotaFacil\Entity;

use Jetimob\Http\Traits\Serializable;

class ServiceParams
{
    use Serializable;

    protected int $id;
    protected Service $servico;
    protected Service $cnae;
    protected NfsTax $servico_imposto;
    protected string $codigo_servico;
    protected string $descricao_servico;
    protected float $valor_condicional;
    protected float $valor_incondicional;
    protected float $aliquota_tributo_federal;
    protected float $aliquota_tributo_municipal;
    protected string $codigo_tributacao_municipio;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return Service
     */
    public function getServico(): Service
    {
        return $this->servico;
    }

    /**
     * @return Service
     */
    public function getCnae(): Service
    {
        return $this->cnae;
    }

    /**
     * @return NfsTax
     */
    public function getServicoImposto(): NfsTax
    {
        return $this->servico_imposto;
    }

    /**
     * @return string
     */
    public function getCodigoServico(): string
    {
        return $this->codigo_servico;
    }

    /**
     * @return string
     */
    public function getDescricaoServico(): string
    {
        return $this->descricao_servico;
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
    public function getValorIncondicional(): float
    {
        return $this->valor_incondicional;
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
    public function getAliquotaTributoMunicipal(): float
    {
        return $this->aliquota_tributo_municipal;
    }

    /**
     * @return string
     */
    public function getCodigoTributacaoMunicipio(): string
    {
        return $this->codigo_tributacao_municipio;
    }
}
