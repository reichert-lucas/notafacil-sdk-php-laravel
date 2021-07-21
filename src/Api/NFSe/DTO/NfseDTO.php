<?php

namespace Jetimob\NotaFacil\Api\NFSe\DTO;

use Jetimob\NotaFacil\Api\DTO;

class NfseDTO extends DTO
{
    protected ?int $cliente = null;
    protected ?NfsTotalNfeDTO $nfs_total = null;
    protected ?int $id_servico_params = null;
    protected ?int $id_cidade = null;
    protected ?NfsConstrucaoCivilNfeDTO $nfs_construcao_civil = null;
    protected ?array $nfs_impostos = null;

    protected ?int $numeracao_rps = null;
    protected ?string $serie_rps = null;
    protected ?string $numeracao_lote = null;
    protected ?string $nome_cliente = null;
    protected ?string $nome_tecnico = null;
    protected ?bool $regime_tributacao = null;
    protected ?int $regime_especial_tributacao = null;
    protected ?int $natureza_operacao = null;
    protected ?string $descricao_servico = null;
    protected ?string $codigo_cnae = null;
    protected ?string $codigo_atividade = null;
    protected ?string $descricao_atividade = null;
    protected ?string $codigo_tributacao_municipio = null;
    protected ?float $valor_total_bruto = null;
    protected ?float $valor_total_liquido = null;
    protected ?string $numero_processo_judicial = null;
    protected ?string $observacao_servico = null;
    protected ?string $observacao_interna_servico = null;
    protected ?bool $ambiente = null;
    protected ?bool $incentivador_cultural = null;
    protected ?int $tipo_local_prestacao_servico = null;

    /**
     * @return int|null
     */
    public function getCliente(): ?int
    {
        return $this->cliente;
    }

    /**
     * @param int|null $cliente Pode ser passado um objeto do cliente para cadastro/atualizar ou o id de referência do cliente
     *
     * @return NfseDTO
     */
    public function setCliente(?int $cliente): NfseDTO
    {
        $this->cliente = $cliente;
        return $this;
    }

    /**
     * @return NfsTotalNfeDTO|null
     */
    public function getNfsTotal(): ?NfsTotalNfeDTO
    {
        return $this->nfs_total;
    }

    /**
     * @param NfsTotalNfeDTO|null $nfs_total
     *
     * @return NfseDTO
     */
    public function setNfsTotal(?NfsTotalNfeDTO $nfs_total): NfseDTO
    {
        $this->nfs_total = $nfs_total;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdServicoParams(): ?int
    {
        return $this->id_servico_params;
    }

    /**
     * @param int|null $id_servico_params
     *
     * @return NfseDTO
     */
    public function setIdServicoParams(?int $id_servico_params): NfseDTO
    {
        $this->id_servico_params = $id_servico_params;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getIdCidade(): ?int
    {
        return $this->id_cidade;
    }

    /**
     * @param int|null $id_cidade ID de identificação da cidade, você pode verificar na rota de cidades	Sim se informado tipo_local_prestacao_servico = 9
     *
     * @return NfseDTO
     */
    public function setIdCidade(?int $id_cidade): NfseDTO
    {
        $this->id_cidade = $id_cidade;
        return $this;
    }

    /**
     * @return NfsConstrucaoCivilNfeDTO|null
     */
    public function getNfsConstrucaoCivil(): ?NfsConstrucaoCivilNfeDTO
    {
        return $this->nfs_construcao_civil;
    }

    /**
     * @param NfsConstrucaoCivilNfeDTO|null $nfs_construcao_civil
     *
     * @return NfseDTO
     */
    public function setNfsConstrucaoCivil(?NfsConstrucaoCivilNfeDTO $nfs_construcao_civil): NfseDTO
    {
        $this->nfs_construcao_civil = $nfs_construcao_civil;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getNfsImpostos(): ?array
    {
        return $this->nfs_impostos;
    }

    /**
     * @param array|null $nfs_impostos Dados dos impostos
     *
     * @return NfseDTO
     */
    public function setNfsImpostos(?array $nfs_impostos): NfseDTO
    {
        $this->nfs_impostos = $nfs_impostos;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNumeracaoRps(): ?int
    {
        return $this->numeracao_rps;
    }

    /**
     * @param int|null $numeracao_rps Numeração do RPS, Caso não informada pega dos parâmetros da empresa.
     *
     * @return NfseDTO
     */
    public function setNumeracaoRps(?int $numeracao_rps): NfseDTO
    {
        $this->numeracao_rps = $numeracao_rps;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSerieRps(): ?string
    {
        return $this->serie_rps;
    }

    /**
     * @param string|null $serie_rps Série do RPS, Caso não informada pega dos parâmetros da empresa.
     *
     * @return NfseDTO
     */
    public function setSerieRps(?string $serie_rps): NfseDTO
    {
        $this->serie_rps = $serie_rps;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumeracaoLote(): ?string
    {
        return $this->numeracao_lote;
    }

    /**
     * @param string|null $numeracao_lote Numeração do Lote, Caso não informado é gerado automaticamente.
     *
     * @return NfseDTO
     */
    public function setNumeracaoLote(?string $numeracao_lote): NfseDTO
    {
        $this->numeracao_lote = $numeracao_lote;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNomeCliente(): ?string
    {
        return $this->nome_cliente;
    }

    /**
     * @param string|null $nome_cliente Nome do cliente
     *
     * @return NfseDTO
     */
    public function setNomeCliente(?string $nome_cliente): NfseDTO
    {
        $this->nome_cliente = $nome_cliente;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNomeTecnico(): ?string
    {
        return $this->nome_tecnico;
    }

    /**
     * @param string|null $nome_tecnico  Nome do técnico
     *
     * @return NfseDTO
     */
    public function setNomeTecnico(?string $nome_tecnico): NfseDTO
    {
        $this->nome_tecnico = $nome_tecnico;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getRegimeTributacao(): ?bool
    {
        return $this->regime_tributacao;
    }

    /**
     * @param bool|null $regime_tributacao Natureza da operação: Optante simples nacional (true), Sujeito a tributação normal (false)
     *
     * @return NfseDTO
     */
    public function setRegimeTributacao(?bool $regime_tributacao): NfseDTO
    {
        $this->regime_tributacao = $regime_tributacao;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getRegimeEspecialTributacao(): ?int
    {
        return $this->regime_especial_tributacao;
    }

    /**
     * @param int|null $regime_especial_tributacao <1, 2, 3, 4, 5, 6, 0> Natureza da operação: Micro-empresa Municipal (1), Estimativa (2), Sociedade de profissionais (3), Cooperativa (4), Micro-empresario individual MEI (5), Micro-empresario e empresa de pequeno porte (6), Não informado (0)
     *
     * @return NfseDTO
     */
    public function setRegimeEspecialTributacao(?int $regime_especial_tributacao): NfseDTO
    {
        if (!is_null($regime_especial_tributacao)) {
            $this->assertInArray($regime_especial_tributacao, [0, 1, 2, 3, 4, 5, 6], 'Natureza da operação: Micro-empresa Municipal (1), Estimativa (2), Sociedade de profissionais (3), Cooperativa (4), Micro-empresario individual MEI (5), Micro-empresario e empresa de pequeno porte (6), Não informado (0)');
        }

        $this->regime_especial_tributacao = $regime_especial_tributacao;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNaturezaOperacao(): ?int
    {
        return $this->natureza_operacao;
    }

    /**
     * @param int|null $natureza_operacao <1, 2, 3, 4 , 5> Natureza da operação: Tributação no município (1), Tributação fora do municipio (2), Isenção (3), Imune (4), Processo Judicial (5)
     *
     * @return NfseDTO
     */
    public function setNaturezaOperacao(?int $natureza_operacao): NfseDTO
    {
        if (!is_null($natureza_operacao)) {
            $this->assertInArray($natureza_operacao, [1, 2, 3, 4, 5], 'Natureza da operação: Tributação no município (1), Tributação fora do municipio (2), Isenção (3), Imune (4), Processo Judicial (5)');
        }

        $this->natureza_operacao = $natureza_operacao;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescricaoServico(): ?string
    {
        return $this->descricao_servico;
    }

    /**
     * @param string|null $descricao_servico Descrição do serviço realizado
     *
     * @return NfseDTO
     */
    public function setDescricaoServico(?string $descricao_servico): NfseDTO
    {
        $this->descricao_servico = $descricao_servico;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCodigoCnae(): ?string
    {
        return $this->codigo_cnae;
    }

    /**
     * @param string|null $codigo_cnae Codigo do cnae a ser utilizado na emissão da nota
     *
     * @return NfseDTO
     */
    public function setCodigoCnae(?string $codigo_cnae): NfseDTO
    {
        $this->codigo_cnae = $codigo_cnae;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCodigoAtividade(): ?string
    {
        return $this->codigo_atividade;
    }

    /**
     * @param string|null $codigo_atividade Codigo do serviço
     *
     * @return NfseDTO
     */
    public function setCodigoAtividade(?string $codigo_atividade): NfseDTO
    {
        $this->codigo_atividade = $codigo_atividade;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescricaoAtividade(): ?string
    {
        return $this->descricao_atividade;
    }

    /**
     * @param string|null $descricao_atividade Descrição da regra
     *
     * @return NfseDTO
     */
    public function setDescricaoAtividade(?string $descricao_atividade): NfseDTO
    {
        $this->descricao_atividade = $descricao_atividade;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCodigoTributacaoMunicipio(): ?string
    {
        return $this->codigo_tributacao_municipio;
    }

    /**
     * @param string|null $codigo_tributacao_municipio Código da tributação município
     *
     * @return NfseDTO
     */
    public function setCodigoTributacaoMunicipio(?string $codigo_tributacao_municipio): NfseDTO
    {
        $this->codigo_tributacao_municipio = $codigo_tributacao_municipio;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getValorTotalBruto(): ?float
    {
        return $this->valor_total_bruto;
    }

    /**
     * @param float|null $valor_total_bruto Valor total do bruto
     *
     * @return NfseDTO
     */
    public function setValorTotalBruto(?float $valor_total_bruto): NfseDTO
    {
        $this->valor_total_bruto = $valor_total_bruto;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getValorTotalLiquido(): ?float
    {
        return $this->valor_total_liquido;
    }

    /**
     * @param float|null $valor_total_liquido Valor total do líquido
     *
     * @return NfseDTO
     */
    public function setValorTotalLiquido(?float $valor_total_liquido): NfseDTO
    {
        $this->valor_total_liquido = $valor_total_liquido;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNumeroProcessoJudicial(): ?string
    {
        return $this->numero_processo_judicial;
    }

    /**
     * @param string|null $numero_processo_judicial Numero do processo judicial
     *
     * @return NfseDTO
     */
    public function setNumeroProcessoJudicial(?string $numero_processo_judicial): NfseDTO
    {
        $this->numero_processo_judicial = $numero_processo_judicial;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getObservacaoServico(): ?string
    {
        return $this->observacao_servico;
    }

    /**
     * @param string|null $observacao_servico Observação para adicionar na nota
     *
     * @return NfseDTO
     */
    public function setObservacaoServico(?string $observacao_servico): NfseDTO
    {
        $this->observacao_servico = $observacao_servico;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getObservacaoInternaServico(): ?string
    {
        return $this->observacao_interna_servico;
    }

    /**
     * @param string|null $observacao_interna_servico Observação para ficar apenas internamente
     *
     * @return NfseDTO
     */
    public function setObservacaoInternaServico(?string $observacao_interna_servico): NfseDTO
    {
        $this->observacao_interna_servico = $observacao_interna_servico;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getAmbiente(): ?bool
    {
        return $this->ambiente;
    }

    /**
     * @param bool|null $ambiente Ambiente no qual será emitido os documentos fiscais. Homologação (false) Produção (true)
     *
     * @return NfseDTO
     */
    public function setAmbiente(?bool $ambiente): NfseDTO
    {
        $this->ambiente = $ambiente;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIncentivadorCultural(): ?bool
    {
        return $this->incentivador_cultural;
    }

    /**
     * @param bool|null $incentivador_cultural Se é um incentivador cultural
     *
     * @return NfseDTO
     */
    public function setIncentivadorCultural(?bool $incentivador_cultural): NfseDTO
    {
        $this->incentivador_cultural = $incentivador_cultural;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTipoLocalPrestacaoServico(): ?string
    {
        return $this->tipo_local_prestacao_servico;
    }

    /**
     * @param int|null $tipo_local_prestacao_servico Informar qual o tipo do local de prestação, sendo: Endereço Emitente (0), Endereço destinatário (1), Outro endereço (9)
     *
     * @return NfseDTO
     */
    public function setTipoLocalPrestacaoServico(?int $tipo_local_prestacao_servico): NfseDTO
    {
        if (!is_null($tipo_local_prestacao_servico)) {
           $this->assertInArray($tipo_local_prestacao_servico, [0, 1, 9], 'Endereço Emitente (0), Endereço destinatário (1), Outro endereço (9)');
        }

        $this->tipo_local_prestacao_servico = $tipo_local_prestacao_servico;
        return $this;
    }

    public static function new(
        int $clientId,
        NfsTotalNfeDTO $nfsTotalNfe,
        string $descricaoServico,
        int $tipoLocalPrestacaoServico,
        bool $ambiente = true
    ): self
    {
        return (new static())
            ->setCliente($clientId)
            ->setNfsTotal($nfsTotalNfe)
            ->setDescricaoServico($descricaoServico)
            ->setTipoLocalPrestacaoServico($tipoLocalPrestacaoServico)
            ->setAmbiente($ambiente);
    }
}
