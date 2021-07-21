<?php

namespace Jetimob\NotaFacil\Entity;

use Jetimob\Http\Traits\Serializable;

class MinimalBusiness
{
    use Serializable;

    protected string $cnpj_cpf;
    protected string $nome_razao_social;

    /**
     * @return string
     */
    public function getCnpjCpf(): string
    {
        return $this->cnpj_cpf;
    }

    /**
     * @return string
     */
    public function getNomeRazaoSocial(): string
    {
        return $this->nome_razao_social;
    }
}
