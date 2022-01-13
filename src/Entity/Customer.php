<?php

namespace Jetimob\NotaFacil\Entity;

use Jetimob\Http\Traits\Serializable;

class Customer
{
    use Serializable;

    /** tipo_cliente */
    public const PF = 'PF';
    public const PJ = 'PJ';

    /** tipo_cadastro */
    public const CUSTOMER = 'Cliente';
    public const SUPPLIER = 'Fornecedor';
    public const BOTH = 'Ambos';

    protected int $id;
    protected Address $endereco_principal;
    protected Phone $telefone_principal;
    protected string $nome_razao_social;
    protected string $nome_fantasia;
    protected string $tipo_cliente;
    protected string $cnpj_cpf;
    protected string $tipo_cadastro;
    protected string $rg;
    protected string $rg_data_emissao;
    protected string $rg_orgao_expedidor;
    protected string $passaporte;
    protected int $estrangeiro;
    protected string $email;
    protected string $nome_contato;
    protected string $email_contato;
    protected string $insc_estadual;
    protected string $insc_municipal;
    protected string $insc_produtor;
    protected string $observacoes;
    protected int $status;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return Address
     */
    public function getEnderecoPrincipal(): Address
    {
        return $this->endereco_principal;
    }

    /**
     * @return Phone
     */
    public function getTelefonePrincipal(): Phone
    {
        return $this->telefone_principal;
    }

    /**
     * @return string
     */
    public function getNomeRazaoSocial(): string
    {
        return $this->nome_razao_social;
    }

    /**
     * @return string
     */
    public function getNomeFantasia(): string
    {
        return $this->nome_fantasia;
    }

    /**
     * @return string
     */
    public function getTipoCliente(): string
    {
        return $this->tipo_cliente;
    }

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
    public function getTipoCadastro(): string
    {
        return $this->tipo_cadastro;
    }

    /**
     * @return string
     */
    public function getRg(): string
    {
        return $this->rg;
    }

    /**
     * @return string
     */
    public function getRgDataEmissao(): string
    {
        return $this->rg_data_emissao;
    }

    /**
     * @return string
     */
    public function getRgOrgaoExpedidor(): string
    {
        return $this->rg_orgao_expedidor;
    }

    /**
     * @return string
     */
    public function getPassaporte(): string
    {
        return $this->passaporte;
    }

    /**
     * @return int
     */
    public function getEstrangeiro(): int
    {
        return $this->estrangeiro;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getNomeContato(): string
    {
        return $this->nome_contato;
    }

    /**
     * @return string
     */
    public function getEmailContato(): string
    {
        return $this->email_contato;
    }

    /**
     * @return string
     */
    public function getInscEstadual(): string
    {
        return $this->insc_estadual;
    }

    /**
     * @return string
     */
    public function getInscMunicipal(): string
    {
        return $this->insc_municipal;
    }

    /**
     * @return string
     */
    public function getInscProdutor(): string
    {
        return $this->insc_produtor;
    }

    /**
     * @return string
     */
    public function getObservacoes(): string
    {
        return $this->observacoes;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }
}
