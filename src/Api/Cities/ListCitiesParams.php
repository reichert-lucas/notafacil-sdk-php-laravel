<?php

namespace Jetimob\NotaFacil\Api\Cities;

use Jetimob\Http\Traits\Serializable;

class ListCitiesParams
{
    use Serializable;

    protected ?string $nome = null;
    protected ?string $estado = null;
    protected ?string $codigo_ibge = null;
    protected ?string $ddd = null;

    /**
     * @return string|null Nome da cidade
     */
    public function getNome(): ?string
    {
        return $this->nome;
    }

    /**
     * @param string|null $nome Nome da cidade
     * @return ListCitiesParams
     */
    public function setNome(?string $nome): ListCitiesParams
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return string|null Sigla do estado
     */
    public function getEstado(): ?string
    {
        return $this->estado;
    }

    /**
     * @param string|null $estado Sigla do estado
     * @return ListCitiesParams
     */
    public function setEstado(?string $estado): ListCitiesParams
    {
        $this->estado = $estado;
        return $this;
    }

    /**
     * @return string|null Código do ibge do município
     */
    public function getCodigoIbge(): ?string
    {
        return $this->codigo_ibge;
    }

    /**
     * @param string|null $codigo_ibge Código do ibge do município
     * @return ListCitiesParams
     */
    public function setCodigoIbge(?string $codigo_ibge): ListCitiesParams
    {
        $this->codigo_ibge = $codigo_ibge;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDdd(): ?string
    {
        return $this->ddd;
    }

    /**
     * @param string|null $ddd
     * @return ListCitiesParams
     */
    public function setDdd(?string $ddd): ListCitiesParams
    {
        $this->ddd = $ddd;
        return $this;
    }
}
