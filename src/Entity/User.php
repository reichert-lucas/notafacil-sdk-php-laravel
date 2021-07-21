<?php

namespace Jetimob\NotaFacil\Entity;

use Jetimob\Http\Traits\Serializable;

class User
{
    use Serializable;

    protected int $id;
    protected string $nome;
    protected string $cpf;
    protected string $email;
    protected string $login;
    protected string $data_inicio;
    protected string $updated_at;
    protected bool $status;
    protected Phone $telefone;
    /** @var Role[] */
    protected array $role;

    protected ?string $skype;
    protected ?string $data_fim;

    /**
     * @return string
     */
    public function roleItemType(): string
    {
        return Role::class;
    }

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
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @return string
     */
    public function getCpf(): string
    {
        return $this->cpf;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @return string
     */
    public function getDataInicio(): string
    {
        return $this->data_inicio;
    }

    /**
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updated_at;
    }

    /**
     * @return bool
     */
    public function isStatus(): bool
    {
        return $this->status;
    }

    /**
     * @return Phone
     */
    public function getTelefone(): Phone
    {
        return $this->telefone;
    }

    /**
     * @return Role[]
     */
    public function getRole(): array
    {
        return $this->role;
    }

    /**
     * @return string|null
     */
    public function getSkype(): ?string
    {
        return $this->skype;
    }

    /**
     * @return string|null
     */
    public function getDataFim(): ?string
    {
        return $this->data_fim;
    }
}
