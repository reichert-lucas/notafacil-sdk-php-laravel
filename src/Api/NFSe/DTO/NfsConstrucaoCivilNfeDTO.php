<?php

namespace Jetimob\NotaFacil\Api\NFSe\DTO;

use Jetimob\NotaFacil\Api\DTO;

class NfsConstrucaoCivilNfeDTO extends DTO
{
    protected ?string $codigo_obra = null;
    protected ?string $codigo_art = null;
    protected ?float $valor_material = null;

    /**
     * @return string|null
     */
    public function getCodigoObra(): ?string
    {
        return $this->codigo_obra;
    }

    /**
     * @param string|null $codigo_obra Código de identificação da obra
     *
     * @return NfsConstrucaoCivilNfeDTO
     */
    public function setCodigoObra(?string $codigo_obra): NfsConstrucaoCivilNfeDTO
    {
        $this->codigo_obra = $codigo_obra;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCodigoArt(): ?string
    {
        return $this->codigo_art;
    }

    /**
     * @param string|null $codigo_art Código do artigo da obra
     *
     * @return NfsConstrucaoCivilNfeDTO
     */
    public function setCodigoArt(?string $codigo_art): NfsConstrucaoCivilNfeDTO
    {
        $this->codigo_art = $codigo_art;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getValorMaterial(): ?float
    {
        return $this->valor_material;
    }

    /**
     * @param float|null $valor_material Valor total dos materiais
     *
     * @return NfsConstrucaoCivilNfeDTO
     */
    public function setValorMaterial(?float $valor_material): NfsConstrucaoCivilNfeDTO
    {
        $this->valor_material = $valor_material;
        return $this;
    }

    public static function new(float $valorMaterial): self
    {
        return (new static())
            ->setValorMaterial($valorMaterial);
    }
}
