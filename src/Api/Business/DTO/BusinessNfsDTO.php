<?php

namespace Jetimob\NotaFacil\Api\Business\DTO;

use Jetimob\NotaFacil\Api\DTO;

class BusinessNfsDTO extends DTO
{
    protected int $natureza_operacao;
    protected int $regime_tributacao;
    protected ?int $regime_especial_tributacao = null;
    protected ?string $usuario_prefeitura = null;
    protected ?string $senha_prefeitura = null;
    protected ?bool $receber_notificacao = null;
    protected ?string $email_notificacao = null;
    protected ?bool $enviar_notificacao_cliente = null;

    /**
     * @return int Natureza da operação: Tributação no município (1), Tributação fora do municipio (2), Isenção (3), Imune (4), Processo Judicial (5)
     */
    public function getNaturezaOperacao(): int
    {
        return $this->natureza_operacao;
    }

    /**
     * @param int $natureza_operacao Natureza da operação: Tributação no município (1), Tributação fora do municipio (2), Isenção (3), Imune (4), Processo Judicial (5)
     *
     * @return BusinessNfsDTO
     */
    public function setNaturezaOperacao(int $natureza_operacao): BusinessNfsDTO
    {
        $this->assertInArray(
            $natureza_operacao,
            [1, 2, 3, 4, 5],
            'Natureza da operação: Tributação no município (1), Tributação fora do municipio (2), Isenção (3),
                Imune (4), Processo Judicial (5)'
        );
        $this->natureza_operacao = $natureza_operacao;
        return $this;
    }

    /**
     * @return int Natureza da operação: Optante simples nacional (1), Simples Nacional - excesso de sublimite de receita bruta (2), Regime Normal (3)
     */
    public function getRegimeTributacao(): int
    {
        return $this->regime_tributacao;
    }

    /**
     * @param int $regime_tributacao Natureza da operação: Optante simples nacional (1), Simples Nacional - excesso de sublimite de receita bruta (2), Regime Normal (3)
     *
     * @return BusinessNfsDTO
     */
    public function setRegimeTributacao(int $regime_tributacao): BusinessNfsDTO
    {
        $this->assertInArray(
            $regime_tributacao,
            [1, 2, 3],
            'Natureza da operação: Optante simples nacional (1), Simples Nacional - excesso de sublimite de
                receita bruta (2), Regime Normal (3)'
        );
        $this->regime_tributacao = $regime_tributacao;
        return $this;
    }

    /**
     * @return string|null Natureza da operação: Micro-empresa Municipal (1), Estimativa (2), Sociedade de profissionais (3), Cooperativa (4), Micro-empresario individual MEI (5), Micro-empresario e empresa de pequeno porte (6), Não informado (0)
     */
    public function getRegimeEspecialTributacao(): ?string
    {
        return $this->regime_especial_tributacao;
    }

    /**
     * @param int|null $regime_especial_tributacao Natureza da operação: Micro-empresa Municipal (1), Estimativa (2), Sociedade de profissionais (3), Cooperativa (4), Micro-empresario individual MEI (5), Micro-empresario e empresa de pequeno porte (6), Não informado (0)
     *
     * @return BusinessNfsDTO
     */
    public function setRegimeEspecialTributacao(?int $regime_especial_tributacao): BusinessNfsDTO
    {
        $this->assertInArray(
            $regime_especial_tributacao,
            [0, 1, 2, 3, 4, 5, 6],
            'Natureza da operação: Micro-empresa Municipal (1), Estimativa (2), Sociedade de profissionais (3),
                Cooperativa (4), Micro-empresario individual MEI (5), Micro-empresario e empresa de pequeno porte (6),
                Não informado (0)'
        );
        $this->regime_especial_tributacao = $regime_especial_tributacao;
        return $this;
    }

    /**
     * @return string|null Login da prefeitura
     */
    public function getUsuarioPrefeitura(): ?string
    {
        return $this->usuario_prefeitura;
    }

    /**
     * @param string|null $usuario_prefeitura Login da prefeitura
     *
     * @return BusinessNfsDTO
     */
    public function setUsuarioPrefeitura(?string $usuario_prefeitura): BusinessNfsDTO
    {
        $this->usuario_prefeitura = $usuario_prefeitura;
        return $this;
    }

    /**
     * @return string|null Senha para login da prefeitura
     */
    public function getSenhaPrefeitura(): ?string
    {
        return $this->senha_prefeitura;
    }

    /**
     * @param string|null $senha_prefeitura Senha para login da prefeitura
     *
     * @return BusinessNfsDTO
     */
    public function setSenhaPrefeitura(?string $senha_prefeitura): BusinessNfsDTO
    {
        $this->senha_prefeitura = $senha_prefeitura;
        return $this;
    }

    /**
     * @return bool|null Caso você deseja receber uma cópia das notas emitidas
     */
    public function getReceberNotificacao(): ?bool
    {
        return $this->receber_notificacao;
    }

    /**
     * @param bool|null $receber_notificacao Caso você deseja receber uma cópia das notas emitidas
     *
     * @return BusinessNfsDTO
     */
    public function setReceberNotificacao(?bool $receber_notificacao): BusinessNfsDTO
    {
        $this->receber_notificacao = $receber_notificacao;
        return $this;
    }

    /**
     * @return string|null Email para você receber uma cópia das notas emitidas
     */
    public function getEmailNotificacao(): ?string
    {
        return $this->email_notificacao;
    }

    /**
     * @param string|null $email_notificacao Email para você receber uma cópia das notas emitidas
     *
     * @return BusinessNfsDTO
     */
    public function setEmailNotificacao(?string $email_notificacao): BusinessNfsDTO
    {
        $this->email_notificacao = $email_notificacao;
        return $this;
    }

    /**
     * @return bool|null Caso você deseja enviar um email com a nota emitida para seu cliente
     */
    public function getEnviarNotificacaoCliente(): ?bool
    {
        return $this->enviar_notificacao_cliente;
    }

    /**
     * @param bool|null $enviar_notificacao_cliente Caso você deseja enviar um email com a nota emitida para seu cliente
     *
     * @return BusinessNfsDTO
     */
    public function setEnviarNotificacaoCliente(?bool $enviar_notificacao_cliente): BusinessNfsDTO
    {
        $this->enviar_notificacao_cliente = $enviar_notificacao_cliente;
        return $this;
    }

    public static function new(int $natureza_operacao, int $regime_tributacao): self
    {
        return (new static())
            ->setNaturezaOperacao($natureza_operacao)
            ->setRegimeTributacao($regime_tributacao);
    }

    public static function newWithNotification(
        int $natureza_operacao,
        int $regime_tributacao,
        string $email_notificacao)
    : self {
        return (new static())
            ->setNaturezaOperacao($natureza_operacao)
            ->setRegimeTributacao($regime_tributacao)
            ->setReceberNotificacao(true)
            ->setEmailNotificacao($email_notificacao);
    }
}
