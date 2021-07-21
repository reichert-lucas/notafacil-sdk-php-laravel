<?php

namespace Jetimob\NotaFacil\Api\Business\DTO;

use Jetimob\NotaFacil\Api\DTO;

class BusinessDTO extends DTO
{
    protected ?string $nome_razao_social = null;
    protected ?string $email = null;
    protected ?string $cnpj_cpf = null;
    protected ?AddressDTO $endereco_principal = null;
    protected ?DTO\PhoneDTO $telefone_principal = null;
    protected ?BusinessNfsDTO $nfs_config = null;

    protected ?string $nome_fantasia = null;
    protected ?string $photo_base64 = null;
    protected ?string $tipo_conta = null;
    protected ?int $matriz_filial = null;
    protected ?string $insc_estadual = null;
    protected ?string $insc_municipal = null;
    protected ?string $cnae_primario = null;
    protected ?string $responsavel = null;
    protected ?string $responsavel_telefone = null;
    protected ?string $observacoes = null;
    protected ?string $host = null;
    protected ?int $status = null;

    /**
     * @return string|null Nome ou razão social da empresa
     */
    public function getNomeRazaoSocial(): ?string
    {
        return $this->nome_razao_social;
    }

    /**
     * @param string|null $nome_razao_social Nome ou razão social da empresa
     *
     * @return BusinessDTO
     */
    public function setNomeRazaoSocial(?string $nome_razao_social): BusinessDTO
    {
        $this->nome_razao_social = $nome_razao_social;
        return $this;
    }

    /**
     * @return string|null E-mail da empresa|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email E-mail da empresa
     *
     * @return BusinessDTO
     */
    public function setEmail(?string $email): BusinessDTO
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string|null CPF ou CNPJ da empresa, pode ser enviado com ou sem pontuação
     */
    public function getCnpjCpf(): ?string
    {
        return $this->cnpj_cpf;
    }

    /**
     * @param string|null $cnpj_cpf CPF ou CNPJ da empresa, pode ser enviado com ou sem pontuação
     *
     * @return BusinessDTO
     */
    public function setCnpjCpf(?string $cnpj_cpf): BusinessDTO
    {
        $this->cnpj_cpf = $cnpj_cpf;
        return $this;
    }

    /**
     * @return AddressDTO|null
     */
    public function getEnderecoPrincipal(): ?AddressDTO
    {
        return $this->endereco_principal;
    }

    /**
     * @param AddressDTO|null $endereco_principal
     *
     * @return BusinessDTO
     */
    public function setEnderecoPrincipal(?AddressDTO $endereco_principal): BusinessDTO
    {
        $this->endereco_principal = $endereco_principal;
        return $this;
    }

    /**
     * @return DTO\PhoneDTO|null
     */
    public function getTelefonePrincipal(): ?DTO\PhoneDTO
    {
        return $this->telefone_principal;
    }

    /**
     * @param DTO\PhoneDTO|null $telefone_principal
     *
     * @return BusinessDTO
     */
    public function setTelefonePrincipal(?DTO\PhoneDTO $telefone_principal): BusinessDTO
    {
        $this->telefone_principal = $telefone_principal;
        return $this;
    }

    /**
     * @return BusinessNfsDTO|null
     */
    public function getNfsConfig(): ?BusinessNfsDTO
    {
        return $this->nfs_config;
    }

    /**
     * @param BusinessNfsDTO|null $nfs_config
     *
     * @return BusinessDTO
     */
    public function setNfsConfig(?BusinessNfsDTO $nfs_config): BusinessDTO
    {
        $this->nfs_config = $nfs_config;
        return $this;
    }

    /**
     * @return string|null Nome fantasia da empresa
     */
    public function getNomeFantasia(): ?string
    {
        return $this->nome_fantasia;
    }

    /**
     * @param string|null $nome_fantasia Nome fantasia da empresa
     *
     * @return BusinessDTO
     */
    public function setNomeFantasia(?string $nome_fantasia): BusinessDTO
    {
        $this->nome_fantasia = $nome_fantasia;
        return $this;
    }

    /**
     * @return string|null Base64 da foto da empresa, formatos aceitos: png, jpeg, jpg.
     */
    public function getPhotoBase64(): ?string
    {
        return $this->photo_base64;
    }

    /**
     * @param string|null $photo_base64 Base64 da foto da empresa, formatos aceitos: png, jpeg, jpg.
     *
     * @return BusinessDTO
     */
    public function setPhotoBase64(?string $photo_base64): BusinessDTO
    {
        $this->photo_base64 = $photo_base64;
        return $this;
    }

    /**
     * @return string|null O tipo da conta, se é PF(Pessoa física) ou PJ(Pessoa Jurídica)
     */
    public function getTipoConta(): ?string
    {
        return $this->tipo_conta;
    }

    /**
     * @param string|null $tipo_conta O tipo da conta, se é PF(Pessoa física) ou PJ(Pessoa Jurídica)
     *
     * @return BusinessDTO
     */
    public function setTipoConta(?string $tipo_conta): BusinessDTO
    {
        if (!is_null($tipo_conta)) {
            $tipo_conta = strtoupper($tipo_conta);
            $this->assertInArray(
                $tipo_conta,
                ['PF', 'PJ'],
                'O tipo da conta, se é PF(Pessoa física) ou PJ(Pessoa Jurídica)'
            );
        }

        $this->tipo_conta = $tipo_conta;
        return $this;
    }

    /**
     * @return int|null Se a empresa é uma matriz (1) ou filial (2)
     */
    public function getMatrizFilial(): ?int
    {
        return $this->matriz_filial;
    }

    /**
     * @param int|null $matriz_filial Se a empresa é uma matriz (1) ou filial (2)
     *
     * @return BusinessDTO
     */
    public function setMatrizFilial(?int $matriz_filial): BusinessDTO
    {
        if (!is_null($matriz_filial)) {
            $this->assertInArray($matriz_filial, [1, 2], 'Se a empresa é uma matriz (1) ou filial (2)');
        }

        $this->matriz_filial = $matriz_filial;
        return $this;
    }

    /**
     * @return string|null Inscrição estadual da empresa
     */
    public function getInscEstadual(): ?string
    {
        return $this->insc_estadual;
    }

    /**
     * @param string|null $insc_estadual Inscrição estadual da empresa
     *
     * @return BusinessDTO
     */
    public function setInscEstadual(?string $insc_estadual): BusinessDTO
    {
        $this->insc_estadual = $insc_estadual;
        return $this;
    }

    /**
     * @return string|null Inscrição municipal da empresa
     */
    public function getInscMunicipal(): ?string
    {
        return $this->insc_municipal;
    }

    /**
     * @param string|null $insc_municipal Inscrição municipal da empresa
     *
     * @return BusinessDTO
     */
    public function setInscMunicipal(?string $insc_municipal): BusinessDTO
    {
        $this->insc_municipal = $insc_municipal;
        return $this;
    }

    /**
     * @return string|null O CNAE principal da empresa
     */
    public function getCnaePrimario(): ?string
    {
        return $this->cnae_primario;
    }

    /**
     * @param string|null $cnae_primario O CNAE principal da empresa
     *
     * @return BusinessDTO
     */
    public function setCnaePrimario(?string $cnae_primario): BusinessDTO
    {
        $this->cnae_primario = $cnae_primario;
        return $this;
    }

    /**
     * @return string|null Nome do responsável da empresa
     */
    public function getResponsavel(): ?string
    {
        return $this->responsavel;
    }

    /**
     * @param string|null $responsavel Nome do responsável da empresa
     *
     * @return BusinessDTO
     */
    public function setResponsavel(?string $responsavel): BusinessDTO
    {
        $this->responsavel = $responsavel;
        return $this;
    }

    /**
     * @return string|null Telefone do responsável da empresa
     */
    public function getResponsavelTelefone(): ?string
    {
        return $this->responsavel_telefone;
    }

    /**
     * @param string|null $responsavel_telefone Telefone do responsável da empresa
     *
     * @return BusinessDTO
     */
    public function setResponsavelTelefone(?string $responsavel_telefone): BusinessDTO
    {
        $this->responsavel_telefone = $responsavel_telefone;
        return $this;
    }

    /**
     * @return string|null Alguma observação interna
     */
    public function getObservacoes(): ?string
    {
        return $this->observacoes;
    }

    /**
     * @param string|null $observacoes Alguma observação interna
     *
     * @return BusinessDTO
     */
    public function setObservacoes(?string $observacoes): BusinessDTO
    {
        $this->observacoes = $observacoes;
        return $this;
    }

    /**
     * @return string|null Link do website da empresa
     */
    public function getHost(): ?string
    {
        return $this->host;
    }

    /**
     * @param string|null $host Link do website da empresa
     *
     * @return BusinessDTO
     */
    public function setHost(?string $host): BusinessDTO
    {
        $this->host = $host;
        return $this;
    }

    /**
     * @return int|null Define se a empresa está ativa ou inativa, caso não seja informado será atribuído o valor 0
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @param int|null $status Define se a empresa está ativa ou inativa, caso não seja informado será atribuído o valor 0
     *
     * @return BusinessDTO
     */
    public function setStatus(?int $status): BusinessDTO
    {
        if (!is_null($status)) {
            $this->assertInArray($status, [0, 1], 'Define se a empresa está ativa (1) ou inativa (0)');
        }

        $this->status = $status;
        return $this;
    }

    public static function new(
        AddressDTO $endereco_principal,
        DTO\PhoneDTO $telefone_principal,
        BusinessNfsDTO $nfs_config,
        string $nome_razao_social,
        string $cnpj_cpf,
        string $email
    ): self
    {
        return (new static())
            ->setEnderecoPrincipal($endereco_principal)
            ->setTelefonePrincipal($telefone_principal)
            ->setNfsConfig($nfs_config)
            ->setNomeRazaoSocial($nome_razao_social)
            ->setCnpjCpf($cnpj_cpf)
            ->setEmail($email);
    }
}
