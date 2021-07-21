<?php

namespace Jetimob\NotaFacil\Api\NFSe\DTO;

use Jetimob\NotaFacil\Api\DTO;

class NfsTotalNfeDTO extends DTO
{
    protected ?float $valor_servico = null; // double	Valor total do serviço	Sim
    protected ?float $base_calculo = null; // double	Base do cálculo do serviço	Não
    protected ?float $valor_deducoes = null; // double	Valor total das deduções	Não
    protected ?float $valor_incondicional = null; // double	Valor incondicional do serviço	Não
    protected ?float $valor_condicional = null; // double	Valor condicional do serviço	Não
    protected ?float $aliquota_tributo_federal = null; // double	Valor da alíquota do tributo federal do serviço	Não
    protected ?float $valor_tributo_federal = null; // double	Valor total do tributo federal do serviço	Não
    protected ?float $aliquota_tributo_municipal = null; // double	Valor total da alíquota do tributo municipal do serviço	Não
    protected ?float $valor_tributo_municipal = null;  // double	Valor total do tributo municipal do serviço	Não

    /**
     * @return float|null
     */
    public function getValorServico(): ?float
    {
        return $this->valor_servico;
    }

    /**
     * @param float|null $valor_servico Valor total do serviço
     *
     * @return NfsTotalNfeDTO
     */
    public function setValorServico(?float $valor_servico): NfsTotalNfeDTO
    {
        $this->valor_servico = $valor_servico;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getBaseCalculo(): ?float
    {
        return $this->base_calculo;
    }

    /**
     * @param float|null $base_calculo Base do cálculo do serviço
     *
     * @return NfsTotalNfeDTO
     */
    public function setBaseCalculo(?float $base_calculo): NfsTotalNfeDTO
    {
        $this->base_calculo = $base_calculo;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getValorDeducoes(): ?float
    {
        return $this->valor_deducoes;
    }

    /**
     * @param float|null $valor_deducoes Valor total das deduções
     *
     * @return NfsTotalNfeDTO
     */
    public function setValorDeducoes(?float $valor_deducoes): NfsTotalNfeDTO
    {
        $this->valor_deducoes = $valor_deducoes;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getValorIncondicional(): ?float
    {
        return $this->valor_incondicional;
    }

    /**
     * @param float|null $valor_incondicional Valor incondicional do serviço
     *
     * @return NfsTotalNfeDTO
     */
    public function setValorIncondicional(?float $valor_incondicional): NfsTotalNfeDTO
    {
        $this->valor_incondicional = $valor_incondicional;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getValorCondicional(): ?float
    {
        return $this->valor_condicional;
    }

    /**
     * @param float|null $valor_condicional Valor condicional do serviço
     *
     * @return NfsTotalNfeDTO
     */
    public function setValorCondicional(?float $valor_condicional): NfsTotalNfeDTO
    {
        $this->valor_condicional = $valor_condicional;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getAliquotaTributoFederal(): ?float
    {
        return $this->aliquota_tributo_federal;
    }

    /**
     * @param float|null $aliquota_tributo_federal Valor da alíquota do tributo federal do serviço
     *
     * @return NfsTotalNfeDTO
     */
    public function setAliquotaTributoFederal(?float $aliquota_tributo_federal): NfsTotalNfeDTO
    {
        $this->aliquota_tributo_federal = $aliquota_tributo_federal;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getValorTributoFederal(): ?float
    {
        return $this->valor_tributo_federal;
    }

    /**
     * @param float|null $valor_tributo_federal Valor total do tributo federal do serviço
     *
     * @return NfsTotalNfeDTO
     */
    public function setValorTributoFederal(?float $valor_tributo_federal): NfsTotalNfeDTO
    {
        $this->valor_tributo_federal = $valor_tributo_federal;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getAliquotaTributoMunicipal(): ?float
    {
        return $this->aliquota_tributo_municipal;
    }

    /**
     * @param float|null $aliquota_tributo_municipal Valor total da alíquota do tributo municipal do serviço
     *
     * @return NfsTotalNfeDTO
     */
    public function setAliquotaTributoMunicipal(?float $aliquota_tributo_municipal): NfsTotalNfeDTO
    {
        $this->aliquota_tributo_municipal = $aliquota_tributo_municipal;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getValorTributoMunicipal(): ?float
    {
        return $this->valor_tributo_municipal;
    }

    /**
     * @param float|null $valor_tributo_municipal Valor total do tributo municipal do serviço
     *
     * @return NfsTotalNfeDTO
     */
    public function setValorTributoMunicipal(?float $valor_tributo_municipal): NfsTotalNfeDTO
    {
        $this->valor_tributo_municipal = $valor_tributo_municipal;
        return $this;
    }

    public static function new(float $valorServico): self
    {
        return (new static())
            ->setValorServico($valorServico);
    }
}
