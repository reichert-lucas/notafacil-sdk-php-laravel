<?php

namespace Jetimob\NotaFacil\Entity;

use Jetimob\Http\Traits\Serializable;

class Nfse
{
    use Serializable;

    protected int $id;
    protected Customer $cliente;
    protected NfsTotal $nfs_total;
    protected NfsConstruction $nfs_construcao_civil;
    protected ServiceParams $servico_params;

    /** @var NfsTax[] */
    protected array $nfs_impostos;

    protected int $numeracao_rps;
    protected string $serie_rps;
    protected string $numeracao_lote;
    protected string $nome_cliente;
    protected string $nome_tecnico;
    protected bool $regime_tributacao;
    protected string $regime_especial_tributacao;
    protected string $natureza_operacao;
    protected string $descricao_servico;
    protected string $codigo_atividade;
    protected string $descricao_atividade;
    protected string $codigo_tributacao_municipio;
    protected float $valor_total_bruto;
    protected float $valor_total_liquido;
    protected string $numero_processo_judicial;
    protected string $observacao_servico;
    protected string $observacao_interna_servico;
    protected bool $ambiente;
    protected bool $incentivador_cultural;
    protected string $cliente_informado;
    protected string $tipo_local_prestacao_servico;
    protected string $condicao_pagamento;
    protected string $nota_situacao;
    protected string $nota_chave;
    protected string $nota_protocolo;
    protected string $nota_numero;
    protected string $nota_recibo_lote;
    protected string $nota_data_autorizacao;
    protected string $nota_data_emissao_rps;
    protected string $nota_data_competencia;
    protected string $nota_usuario_autorizacao;
    protected string $nota_data_cancelamento;
    protected string $nota_key;
    protected string $motivo_cancelamento;
    protected string $nota_status;

    public function nfs_impostosItemType(): string
    {
        return NfsTax::class;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return Customer
     */
    public function getCliente(): Customer
    {
        return $this->cliente;
    }

    /**
     * @return NfsTotal
     */
    public function getNfsTotal(): NfsTotal
    {
        return $this->nfs_total;
    }

    /**
     * @return NfsConstruction
     */
    public function getNfsConstrucaoCivil(): NfsConstruction
    {
        return $this->nfs_construcao_civil;
    }

    /**
     * @return ServiceParams
     */
    public function getServicoParams(): ServiceParams
    {
        return $this->servico_params;
    }

    /**
     * @return NfsTax[]
     */
    public function getNfsImpostos(): array
    {
        return $this->nfs_impostos;
    }

    /**
     * @return int
     */
    public function getNumeracaoRps(): int
    {
        return $this->numeracao_rps;
    }

    /**
     * @return string
     */
    public function getSerieRps(): string
    {
        return $this->serie_rps;
    }

    /**
     * @return string
     */
    public function getNumeracaoLote(): string
    {
        return $this->numeracao_lote;
    }

    /**
     * @return string
     */
    public function getNomeCliente(): string
    {
        return $this->nome_cliente;
    }

    /**
     * @return string
     */
    public function getNomeTecnico(): string
    {
        return $this->nome_tecnico;
    }

    /**
     * @return bool
     */
    public function isRegimeTributacao(): bool
    {
        return $this->regime_tributacao;
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
    public function getNaturezaOperacao(): string
    {
        return $this->natureza_operacao;
    }

    /**
     * @return string
     */
    public function getDescricaoServico(): string
    {
        return $this->descricao_servico;
    }

    /**
     * @return string
     */
    public function getCodigoAtividade(): string
    {
        return $this->codigo_atividade;
    }

    /**
     * @return string
     */
    public function getDescricaoAtividade(): string
    {
        return $this->descricao_atividade;
    }

    /**
     * @return string
     */
    public function getCodigoTributacaoMunicipio(): string
    {
        return $this->codigo_tributacao_municipio;
    }

    /**
     * @return float
     */
    public function getValorTotalBruto(): float
    {
        return $this->valor_total_bruto;
    }

    /**
     * @return float
     */
    public function getValorTotalLiquido(): float
    {
        return $this->valor_total_liquido;
    }

    /**
     * @return string
     */
    public function getNumeroProcessoJudicial(): string
    {
        return $this->numero_processo_judicial;
    }

    /**
     * @return string
     */
    public function getObservacaoServico(): string
    {
        return $this->observacao_servico;
    }

    /**
     * @return string
     */
    public function getObservacaoInternaServico(): string
    {
        return $this->observacao_interna_servico;
    }

    /**
     * @return bool
     */
    public function isAmbiente(): bool
    {
        return $this->ambiente;
    }

    /**
     * @return bool
     */
    public function isIncentivadorCultural(): bool
    {
        return $this->incentivador_cultural;
    }

    /**
     * @return string
     */
    public function getClienteInformado(): string
    {
        return $this->cliente_informado;
    }

    /**
     * @return string
     */
    public function getTipoLocalPrestacaoServico(): string
    {
        return $this->tipo_local_prestacao_servico;
    }

    /**
     * @return string
     */
    public function getCondicaoPagamento(): string
    {
        return $this->condicao_pagamento;
    }

    /**
     * @return string
     */
    public function getNotaSituacao(): string
    {
        return $this->nota_situacao;
    }

    /**
     * @return string
     */
    public function getNotaChave(): string
    {
        return $this->nota_chave;
    }

    /**
     * @return string
     */
    public function getNotaProtocolo(): string
    {
        return $this->nota_protocolo;
    }

    /**
     * @return string
     */
    public function getNotaNumero(): string
    {
        return $this->nota_numero;
    }

    /**
     * @return string
     */
    public function getNotaReciboLote(): string
    {
        return $this->nota_recibo_lote;
    }

    /**
     * @return string
     */
    public function getNotaDataAutorizacao(): string
    {
        return $this->nota_data_autorizacao;
    }

    /**
     * @return string
     */
    public function getNotaDataEmissaoRps(): string
    {
        return $this->nota_data_emissao_rps;
    }

    /**
     * @return string
     */
    public function getNotaDataCompetencia(): string
    {
        return $this->nota_data_competencia;
    }

    /**
     * @return string
     */
    public function getNotaUsuarioAutorizacao(): string
    {
        return $this->nota_usuario_autorizacao;
    }

    /**
     * @return string
     */
    public function getNotaDataCancelamento(): string
    {
        return $this->nota_data_cancelamento;
    }

    /**
     * @return string
     */
    public function getNotaKey(): string
    {
        return $this->nota_key;
    }

    /**
     * @return string
     */
    public function getMotivoCancelamento(): string
    {
        return $this->motivo_cancelamento;
    }

    /**
     * @return string
     */
    public function getNotaStatus(): string
    {
        return $this->nota_status;
    }
}
