<?php

namespace Jetimob\NotaFacil\Entity;

use Jetimob\Http\Traits\Serializable;

class Business
{
    use Serializable;

    protected int $id;
    protected Address $endereco;
    protected Phone $telefone_principal;
    protected NfsConfig $nfs_config;
    protected Certificate $certificado_ativo;
    protected string $nome_razao_social;
    protected string $nome_fantasia;
    protected ?string $tipo_conta;
    protected string $cnpj_cpf;
    protected ?string $matriz_filial;
    protected ?string $insc_estadual;
    protected ?string $insc_municipal;
    protected ?string $cnae_primario;
    protected string $email;
    protected ?string $responsavel;
    protected ?string $responsavel_telefone;
    protected ?string $observacoes;
    protected ?string $tipo_empresa;
    protected ?string $host;
    protected ?string $url_retorno = null;
    protected string $status;
    protected string $consumer_id;

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
    public function getEndereco(): Address
    {
        return $this->endereco;
    }

    /**
     * @return Phone
     */
    public function getTelefonePrincipal(): Phone
    {
        return $this->telefone_principal;
    }

    /**
     * @return NfsConfig
     */
    public function getNfsConfig(): NfsConfig
    {
        return $this->nfs_config;
    }

    /**
     * @return Certificate
     */
    public function getCertificadoAtivo(): Certificate
    {
        return $this->certificado_ativo;
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
     * @return string|null
     */
    public function getTipoConta(): ?string
    {
        return $this->tipo_conta;
    }

    /**
     * @return string
     */
    public function getCnpjCpf(): string
    {
        return $this->cnpj_cpf;
    }

    /**
     * @return string|null
     */
    public function getMatrizFilial(): ?string
    {
        return $this->matriz_filial;
    }

    /**
     * @return string|null
     */
    public function getInscEstadual(): ?string
    {
        return $this->insc_estadual;
    }

    /**
     * @return string|null
     */
    public function getInscMunicipal(): ?string
    {
        return $this->insc_municipal;
    }

    /**
     * @return string|null
     */
    public function getCnaePrimario(): ?string
    {
        return $this->cnae_primario;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string|null
     */
    public function getResponsavel(): ?string
    {
        return $this->responsavel;
    }

    /**
     * @return string|null
     */
    public function getResponsavelTelefone(): ?string
    {
        return $this->responsavel_telefone;
    }

    /**
     * @return string|null
     */
    public function getObservacoes(): ?string
    {
        return $this->observacoes;
    }

    /**
     * @return string|null
     */
    public function getTipoEmpresa(): ?string
    {
        return $this->tipo_empresa;
    }

    /**
     * @return string|null
     */
    public function getHost(): ?string
    {
        return $this->host;
    }

    /**
     * @return string|null
     */
    public function getUrlRetorno(): ?string
    {
        return $this->url_retorno;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getConsumerId(): string
    {
        return $this->consumer_id;
    }
}
