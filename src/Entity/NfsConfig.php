<?php

namespace Jetimob\NotaFacil\Entity;

use Jetimob\Http\Traits\Serializable;

class NfsConfig
{
    use Serializable;

    protected string $id;
    protected string $natureza_operacao;
    protected string $regime_especial_tributacao;
    protected string $usuario_prefeitura;
    protected string $senha_prefeitura;
    protected bool $regime_tributacao;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNaturezaOperacao(): string
    {
        return $this->natureza_operacao;
    }

    /**
     * @return string
     */
    public function getRegimeEspecialTributacao(): string
    {
        return $this->regime_especial_tributacao;
    }

    /**
     * @return string
     */
    public function getUsuarioPrefeitura(): string
    {
        return $this->usuario_prefeitura;
    }

    /**
     * @return string
     */
    public function getSenhaPrefeitura(): string
    {
        return $this->senha_prefeitura;
    }

    /**
     * @return bool
     */
    public function isRegimeTributacao(): bool
    {
        return $this->regime_tributacao;
    }
}
