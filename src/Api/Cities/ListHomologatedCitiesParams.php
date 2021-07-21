<?php

namespace Jetimob\NotaFacil\Api\Cities;

use Jetimob\Http\Traits\Serializable;

class ListHomologatedCitiesParams
{
    use Serializable;

    protected ?string $nome = null;
    protected ?string $padrao = null;
    protected ?string $codigo_ibge = null;

    /**
     * @return string|null Nome da cidade
     */
    public function getNome(): ?string
    {
        return $this->nome;
    }

    /**
     * @param string|null $nome Nome da cidade
     * @return ListHomologatedCitiesParams
     */
    public function setNome(?string $nome): ListHomologatedCitiesParams
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return string|null Padrao do webservice
     */
    public function getPadrao(): ?string
    {
        return $this->padrao;
    }

    /**
     * @param string|null $padrao Padrao do webservice
     * @return ListHomologatedCitiesParams
     */
    public function setPadrao(?string $padrao): ListHomologatedCitiesParams
    {
        $this->padrao = $padrao;
        return $this;
    }

    /**
     * @return string|null Código IBGE
     */
    public function getCodigoIbge(): ?string
    {
        return $this->codigo_ibge;
    }

    /**
     * @param string|null $codigo_ibge Código IBGE
     * @return ListHomologatedCitiesParams
     */
    public function setCodigoIbge(?string $codigo_ibge): ListHomologatedCitiesParams
    {
        $this->codigo_ibge = $codigo_ibge;
        return $this;
    }
}
