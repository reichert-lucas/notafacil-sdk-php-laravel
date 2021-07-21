<?php

namespace Jetimob\NotaFacil\Entity;

use Jetimob\Http\Traits\Serializable;

class Certificate
{
    use Serializable;

    protected int $id;
    protected string $certificado_expiracao;
    protected string $certificado_instalado;
    protected string $certificado_tipo;
    protected string $certificado_url;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getCertificadoExpiracao(): string
    {
        return $this->certificado_expiracao;
    }

    /**
     * @return string
     */
    public function getCertificadoInstalado(): string
    {
        return $this->certificado_instalado;
    }

    /**
     * @return string
     */
    public function getCertificadoTipo(): string
    {
        return $this->certificado_tipo;
    }

    /**
     * @return string
     */
    public function getCertificadoUrl(): string
    {
        return $this->certificado_url;
    }
}
