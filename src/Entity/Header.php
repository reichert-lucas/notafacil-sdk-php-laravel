<?php

namespace Jetimob\NotaFacil\Entity;

use Jetimob\Http\Traits\Serializable;

class Header
{
    use Serializable;

    protected string $api_name;
    protected string $data_hora;
    protected MinimalBusiness $empresa;

    /**
     * @return string
     */
    public function getApiName(): string
    {
        return $this->api_name;
    }

    /**
     * @return string
     */
    public function getDataHora(): string
    {
        return $this->data_hora;
    }

    /**
     * @return MinimalBusiness
     */
    public function getEmpresa(): MinimalBusiness
    {
        return $this->empresa;
    }
}
