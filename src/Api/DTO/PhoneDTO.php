<?php

namespace Jetimob\NotaFacil\Api\DTO;

use Jetimob\NotaFacil\Api\DTO;

class PhoneDTO extends DTO
{
    protected string $ddd;
    protected string $numero;
    protected ?string $ramal = null;
    protected ?string $tipo_telefone = null;

    /**
     * @return string DDD do telefone
     */
    public function getDdd(): string
    {
        return $this->ddd;
    }

    /**
     * @param string $ddd DDD do telefone
     *
     * @return PhoneDTO
     */
    public function setDdd(string $ddd): PhoneDTO
    {
        $this->ddd = $ddd;
        return $this;
    }

    /**
     * @return string Numero do telefone
     */
    public function getNumero(): string
    {
        return $this->numero;
    }

    /**
     * @param string $numero Numero do telefone
     *
     * @return PhoneDTO
     */
    public function setNumero(string $numero): PhoneDTO
    {
        $this->numero = $numero;
        return $this;
    }

    /**
     * @return string|null Ramal do telefone
     */
    public function getRamal(): ?string
    {
        return $this->ramal;
    }

    /**
     * @param string|null $ramal Ramal do telefone
     *
     * @return PhoneDTO
     */
    public function setRamal(?string $ramal): PhoneDTO
    {
        $this->ramal = $ramal;
        return $this;
    }

    /**
     * @return string|null O tipo do telefone, Fixo (1) ou Celular (2)
     */
    public function getTipoTelefone(): ?string
    {
        return $this->tipo_telefone;
    }

    /**
     * @param string $tipo_telefone O tipo do telefone, Fixo (1) ou Celular (2)
     *
     * @return PhoneDTO
     */
    public function setTipoTelefone(string $tipo_telefone): PhoneDTO
    {
        $this->assertInArray($tipo_telefone, ['1', '2'], 'Tipos válidos: 1 (fixo) e 2 (celular)');
        $this->tipo_telefone = $tipo_telefone;
        return $this;
    }

    public static function new(string $ddd, string $numero): self
    {
        return (new static())
            ->setDdd($ddd)
            ->setNumero($numero);
    }
}
