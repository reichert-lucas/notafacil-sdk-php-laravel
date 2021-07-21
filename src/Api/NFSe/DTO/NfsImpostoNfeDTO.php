<?php

namespace Jetimob\NotaFacil\Api\NFSe\DTO;

use Jetimob\NotaFacil\Api\DTO;

class NfsImpostoNfeDTO extends DTO
{
    protected ?string $tipo = null;
    protected ?bool $reter = null;
    protected ?float $aliquota = null;
    protected ?float $valor = null;

    /**
     * @return string|null
     */
    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    /**
     * @param string|null $tipo Tipo do imposto string<COFINS,PIS,CSLL,IR,INSS,ISS,ISSSN>
     *
     * @return NfsImpostoNfeDTO
     */
    public function setTipo(?string $tipo): NfsImpostoNfeDTO
    {
        if (!is_null($tipo)) {
            $tipo = strtoupper($tipo);
            $this->assertInArray($tipo, ['COFINS', 'PIS', 'CSLL', 'IR', 'INSS', 'ISS', 'ISSSN']);
        }

        $this->tipo = $tipo;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getReter(): ?bool
    {
        return $this->reter;
    }

    /**
     * @param bool|null $reter Caso será retido o imposto
     *
     * @return NfsImpostoNfeDTO
     */
    public function setReter(?bool $reter): NfsImpostoNfeDTO
    {
        $this->reter = $reter;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getAliquota(): ?float
    {
        return $this->aliquota;
    }

    /**
     * @param float|null $aliquota Alíquota do imposto
     *
     * @return NfsImpostoNfeDTO
     */
    public function setAliquota(?float $aliquota): NfsImpostoNfeDTO
    {
        $this->aliquota = $aliquota;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getValor(): ?float
    {
        return $this->valor;
    }

    /**
     * @param float|null $valor Valor do imposto
     *
     * @return NfsImpostoNfeDTO
     */
    public function setValor(?float $valor): NfsImpostoNfeDTO
    {
        $this->valor = $valor;
        return $this;
    }

    public static function new(string $tipo, float $valor): self
    {
        return (new static())
            ->setTipo($tipo)
            ->setValor($valor);
    }
}
