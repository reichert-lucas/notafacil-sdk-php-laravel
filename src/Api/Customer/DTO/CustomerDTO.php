<?php

namespace Jetimob\NotaFacil\Api\Customer\DTO;

use Jetimob\NotaFacil\Api\Business\DTO\AddressDTO;
use Jetimob\NotaFacil\Api\DTO;

class CustomerDTO extends DTO
{
    protected ?AddressDTO $endereco_principal = null;
    protected ?DTO\PhoneDTO $telefone_principal = null;

    protected ?string $nome_razao_social = null;
    protected ?string $nome_fantasia = null;
    protected ?string $tipo_cliente = null;
    protected ?string $cnpj_cpf = null;
    protected ?string $tipo_cadastro = null;
    protected ?string $rg = null;
    protected ?string $rg_data_emissao = null;
    protected ?string $rg_orgao_expedidor = null;
    protected ?string $passaporte = null;
    protected ?int $estrangeiro = null;
    protected ?string $email = null;
    protected ?string $nome_contato = null;
    protected ?string $email_contato = null;
    protected ?string $insc_estadual = null;
    protected ?string $insc_municipal = null;
    protected ?string $insc_produtor = null;
    protected ?string $observacoes = null;
    protected ?int $status = null;

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
     * @return CustomerDTO
     */
    public function setEnderecoPrincipal(?AddressDTO $endereco_principal): CustomerDTO
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
     * @return CustomerDTO
     */
    public function setTelefonePrincipal(?DTO\PhoneDTO $telefone_principal): CustomerDTO
    {
        $this->telefone_principal = $telefone_principal;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNomeRazaoSocial(): ?string
    {
        return $this->nome_razao_social;
    }

    /**
     * @param string|null $nome_razao_social Nome ou razão social do cliente
     *
     * @return CustomerDTO
     */
    public function setNomeRazaoSocial(?string $nome_razao_social): CustomerDTO
    {
        $this->nome_razao_social = $nome_razao_social;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNomeFantasia(): ?string
    {
        return $this->nome_fantasia;
    }

    /**
     * @param string|null $nome_fantasia Nome fantasia do cliente
     *
     * @return CustomerDTO
     */
    public function setNomeFantasia(?string $nome_fantasia): CustomerDTO
    {
        $this->nome_fantasia = $nome_fantasia;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTipoCliente(): ?string
    {
        return $this->tipo_cliente;
    }

    /**
     * @param string|null $tipo_cliente O tipo do cliente, se é PF(Pessoa Física) ou PJ(Pessoa Jurídica)
     *
     * @return CustomerDTO
     */
    public function setTipoCliente(?string $tipo_cliente): CustomerDTO
    {
        if (!is_null($tipo_cliente)) {
            $tipo_cliente = strtoupper($tipo_cliente);
            $this->assertInArray($tipo_cliente, ['PF', 'PJ'], 'PF(Pessoa Física) ou PJ(Pessoa Jurídica)');
        }

        $this->tipo_cliente = $tipo_cliente;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCnpjCpf(): ?string
    {
        return $this->cnpj_cpf;
    }

    /**
     * @param string|null $cnpj_cpf CPF ou CNPJ do cliente, pode ser enviado com ou sem pontuação
     *
     * @return CustomerDTO
     */
    public function setCnpjCpf(?string $cnpj_cpf): CustomerDTO
    {
        $this->cnpj_cpf = $cnpj_cpf;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTipoCadastro(): ?string
    {
        return $this->tipo_cadastro;
    }

    /**
     * @param string|null $tipo_cadastro string<Cliente, Fornecedor, Ambos>	Identificação do tipo do seu cliente, se é
     * fornecedor, cliente ou ambos
     *
     * @return CustomerDTO
     */
    public function setTipoCadastro(?string $tipo_cadastro): CustomerDTO
    {
        if (!is_null($tipo_cadastro)) {
            $tipo_cadastro = strtolower($tipo_cadastro);
            $this->assertInArray($tipo_cadastro, ['cliente' , 'fornecedor', 'ambos'], 'Cliente, Fornecedor ou Ambos');
        }

        $this->tipo_cadastro = $tipo_cadastro;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRg(): ?string
    {
        return $this->rg;
    }

    /**
     * @param string|null $rg RG do cliente, pode ser enviado com ou sem pontuação
     *
     * @return CustomerDTO
     */
    public function setRg(?string $rg): CustomerDTO
    {
        $this->rg = $rg;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRgDataEmissao(): ?string
    {
        return $this->rg_data_emissao;
    }

    /**
     * @param string|null $rg_data_emissao Data da emissão do RG do cliente
     *
     * @return CustomerDTO
     */
    public function setRgDataEmissao(?string $rg_data_emissao): CustomerDTO
    {
        $this->rg_data_emissao = $rg_data_emissao;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRgOrgaoExpedidor(): ?string
    {
        return $this->rg_orgao_expedidor;
    }

    /**
     * @param string|null $rg_orgao_expedidor Órgão expedidor do RG do cliente
     *
     * @return CustomerDTO
     */
    public function setRgOrgaoExpedidor(?string $rg_orgao_expedidor): CustomerDTO
    {
        $this->rg_orgao_expedidor = $rg_orgao_expedidor;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPassaporte(): ?string
    {
        return $this->passaporte;
    }

    /**
     * @param string|null $passaporte Passaporte do cliente, caso o mesmo seja estrangeiro
     *
     * @return CustomerDTO
     */
    public function setPassaporte(?string $passaporte): CustomerDTO
    {
        $this->passaporte = $passaporte;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getEstrangeiro(): ?int
    {
        return $this->estrangeiro;
    }

    /**
     * @param bool $estrangeiro Para informar que é um estrangeiro
     *
     * @return CustomerDTO
     */
    public function setEstrangeiro(bool $estrangeiro): CustomerDTO
    {
        $this->estrangeiro = (int) $estrangeiro;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email E-mail do cliente
     *
     * @return CustomerDTO
     */
    public function setEmail(?string $email): CustomerDTO
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNomeContato(): ?string
    {
        return $this->nome_contato;
    }

    /**
     * @param string|null $nome_contato Nome para contato com o cliente, útil caso seja um fornecedor
     *
     * @return CustomerDTO
     */
    public function setNomeContato(?string $nome_contato): CustomerDTO
    {
        $this->nome_contato = $nome_contato;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmailContato(): ?string
    {
        return $this->email_contato;
    }

    /**
     * @param string|null $email_contato E-mail para contato com o cliente, útil caso seja um fornecedor
     *
     * @return CustomerDTO
     */
    public function setEmailContato(?string $email_contato): CustomerDTO
    {
        $this->email_contato = $email_contato;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInscEstadual(): ?string
    {
        return $this->insc_estadual;
    }

    /**
     * @param string|null $insc_estadual Inscrição estadual do cliente, útil caso seja um fornecedor
     *
     * @return CustomerDTO
     */
    public function setInscEstadual(?string $insc_estadual): CustomerDTO
    {
        $this->insc_estadual = $insc_estadual;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInscMunicipal(): ?string
    {
        return $this->insc_municipal;
    }

    /**
     * @param string|null $insc_municipal Inscrição municipal do cliente, útil caso seja um fornecedor
     *
     * @return CustomerDTO
     */
    public function setInscMunicipal(?string $insc_municipal): CustomerDTO
    {
        $this->insc_municipal = $insc_municipal;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInscProdutor(): ?string
    {
        return $this->insc_produtor;
    }

    /**
     * @param string|null $insc_produtor Inscrição dos produtos, útil caso seja um fornecedor
     *
     * @return CustomerDTO
     */
    public function setInscProdutor(?string $insc_produtor): CustomerDTO
    {
        $this->insc_produtor = $insc_produtor;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getObservacoes(): ?string
    {
        return $this->observacoes;
    }

    /**
     * @param string|null $observacoes Alguma observação interna
     *
     * @return CustomerDTO
     */
    public function setObservacoes(?string $observacoes): CustomerDTO
    {
        $this->observacoes = $observacoes;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @param bool $status Controle para saber se o cliente está ativo ou não
     *
     * @return CustomerDTO
     */
    public function setStatus(bool $status): CustomerDTO
    {
        $this->status = (int) $status;
        return $this;
    }

    public static function new(
        AddressDTO $enderecoPrincipal,
        DTO\PhoneDTO $telefonePrincipal,
        string $nomeRazaoSocial,
        string $tipoCliente,
        string $cnpjCpf,
        string $tipoCadastro
    ): self {
        return (new static())
            ->setEnderecoPrincipal($enderecoPrincipal)
            ->setTelefonePrincipal($telefonePrincipal)
            ->setNomeRazaoSocial($nomeRazaoSocial)
            ->setTipoCliente($tipoCliente)
            ->setCnpjCpf($cnpjCpf)
            ->setTipoCadastro($tipoCadastro);
    }
}
