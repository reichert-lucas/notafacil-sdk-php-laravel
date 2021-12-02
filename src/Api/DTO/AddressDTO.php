<?php

namespace Jetimob\NotaFacil\Api\DTO;

use Jetimob\NotaFacil\Api\DTO;

class AddressDTO extends DTO
{
    protected ?int $id_cidade = null;
    protected ?string $ibge_cidade = null;
    protected string $logradouro;
    protected string $bairro;
    protected int $numero;
    protected string $cep;
    protected ?string $complemento = null;

    /**
     * @link https://docs.notafacil.io/#d06e764d-5c1b-4771-a68a-dfe061e18bb3
     * @return int ID de identificação da cidade, você pode verificar na rota de cidades
     */
    public function getIdCidade(): int
    {
        return $this->id_cidade;
    }

    /**
     * @link https://docs.notafacil.io/#d06e764d-5c1b-4771-a68a-dfe061e18bb3
     *
     * @param int $id_cidade ID de identificação da cidade, você pode verificar na rota de cidades
     *
     * @return AddressDTO
     */
    public function setIdCidade(int $id_cidade): AddressDTO
    {
        $this->id_cidade = $id_cidade;
        return $this;
    }

    /**
     * @return string IBGE da cidade para vincular
     */
    public function getIbgeCidade(): string
    {
        return $this->ibge_cidade;
    }

    /**
     * @param string $ibge_cidade IBGE da cidade para vincular
     *
     * @return AddressDTO
     */
    public function setIbgeCidade(string $ibge_cidade): AddressDTO
    {
        $this->ibge_cidade = $ibge_cidade;
        return $this;
    }

    /**
     * @return string Nome da rua, ou avenida
     */
    public function getLogradouro(): string
    {
        return $this->logradouro;
    }

    /**
     * @param string $logradouro Nome da rua, ou avenida
     *
     * @return AddressDTO
     */
    public function setLogradouro(string $logradouro): AddressDTO
    {
        $this->logradouro = $logradouro;
        return $this;
    }

    /**
     * @return string Nome do bairro
     */
    public function getBairro(): string
    {
        return $this->bairro;
    }

    /**
     * @param string $bairro Nome do bairro
     *
     * @return AddressDTO
     */
    public function setBairro(string $bairro): AddressDTO
    {
        $this->bairro = $bairro;
        return $this;
    }

    /**
     * @return int Numero do endereço
     */
    public function getNumero(): int
    {
        return $this->numero;
    }

    /**
     * @param int $numero Numero do endereço
     *
     * @return AddressDTO
     */
    public function setNumero(int $numero): AddressDTO
    {
        $this->numero = $numero;
        return $this;
    }

    /**
     * @return string CEP do endereço, pode ser enviado com ou sem pontuação
     */
    public function getCep(): string
    {
        return $this->cep;
    }

    /**
     * @param string $cep CEP do endereço, pode ser enviado com ou sem pontuação
     *
     * @return AddressDTO
     */
    public function setCep(string $cep): AddressDTO
    {
        $this->cep = $cep;
        return $this;
    }

    /**
     * @return string|null Algum complemento caso possua
     */
    public function getComplemento(): ?string
    {
        return $this->complemento;
    }

    /**
     * @param string|null $complemento Algum complemento caso possua
     *
     * @return AddressDTO
     */
    public function setComplemento(?string $complemento): AddressDTO
    {
        $this->complemento = $complemento;
        return $this;
    }

    public static function newWithCityId(
        int $id_cidade,
        string $logradouro,
        string $bairro,
        string $numero,
        string $cep
    ): self {
        return (new static())
            ->setIdCidade($id_cidade)
            ->setLogradouro($logradouro)
            ->setBairro($bairro)
            ->setNumero($numero)
            ->setCep($cep);
    }

    public static function newWithIbgeCity(
        string $ibge_cidade,
        string $logradouro,
        string $bairro,
        string $numero,
        string $cep
    ): self {
        return (new static())
            ->setIbgeCidade($ibge_cidade)
            ->setLogradouro($logradouro)
            ->setBairro($bairro)
            ->setNumero($numero)
            ->setCep($cep);
    }
}
