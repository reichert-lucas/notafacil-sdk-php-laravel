<?php

namespace Jetimob\NotaFacil\Api\User\DTO;

use Jetimob\NotaFacil\Api\DTO;

class UserDTO extends DTO
{
    protected ?DTO\PhoneDTO $telefone = null;
    protected ?string $nome = null;
    protected ?string $cpf = null;
    protected ?string $email = null;
    protected ?string $login = null;
    protected ?string $password = null;
    protected ?string $role = null;
    protected ?string $status = null;
    protected ?string $skype = null;

    /**
     * @return DTO\PhoneDTO|null
     */
    public function getTelefone(): ?DTO\PhoneDTO
    {
        return $this->telefone;
    }

    /**
     * @param DTO\PhoneDTO|null $telefone
     *
     * @return UserDTO
     */
    public function setTelefone(?DTO\PhoneDTO $telefone): UserDTO
    {
        $this->telefone = $telefone;
        return $this;
    }

    /**
     * @return string|null Nome do usuário
     */
    public function getNome(): ?string
    {
        return $this->nome;
    }

    /**
     * @param string|null $nome Nome do usuário
     *
     * @return UserDTO
     */
    public function setNome(?string $nome): UserDTO
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return string|null CPF do usuário
     */
    public function getCpf(): ?string
    {
        return $this->cpf;
    }

    /**
     * @param string|null $cpf CPF do usuário
     *
     * @return UserDTO
     */
    public function setCpf(?string $cpf): UserDTO
    {
        $this->cpf = $cpf;
        return $this;
    }

    /**
     * @return string|null E-mail do usuário
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email E-mail do usuário
     *
     * @return UserDTO
     */
    public function setEmail(?string $email): UserDTO
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string|null Login do usuário
     */
    public function getLogin(): ?string
    {
        return $this->login;
    }

    /**
     * @param string|null $login Login do usuário
     *
     * @return UserDTO
     */
    public function setLogin(?string $login): UserDTO
    {
        $this->login = $login;
        return $this;
    }

    /**
     * @return string|null Senha do usuário
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string|null $password Senha do usuário
     *
     * @return UserDTO
     */
    public function setPassword(?string $password): UserDTO
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string|null ID da Regra de acesso a ser vinculada ao usuário
     */
    public function getRole(): ?string
    {
        return $this->role;
    }

    /**
     * @param string|null $role ID da Regra de acesso a ser vinculada ao usuário
     *
     * @return UserDTO
     */
    public function setRole(?string $role): UserDTO
    {
        $this->role = $role;
        return $this;
    }

    /**
     * @return string|null Status do usuário, Inativo (0) ou Ativo (1)
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param int|null $status Status do usuário, Inativo (0) ou Ativo (1)
     *
     * @return UserDTO
     */
    public function setStatus(?int $status): UserDTO
    {
        $this->assertInArray($status, [0, 1], 'Status do usuário, Inativo (0) ou Ativo (1)');
        $this->status = $status;
        return $this;
    }

    /**
     * @return string|null Skype do usuário
     */
    public function getSkype(): ?string
    {
        return $this->skype;
    }

    /**
     * @param string|null $skype Skype do usuário
     *
     * @return UserDTO
     */
    public function setSkype(?string $skype): UserDTO
    {
        $this->skype = $skype;
        return $this;
    }

    public static function new(
        string $nome,
        string $cpf,
        string $email,
        string $login,
        string $password,
        int $role,
        int $status,
        DTO\PhoneDTO $telefone
    ): self
    {
        return (new static())
            ->setNome($nome)
            ->setCpf($cpf)
            ->setEmail($email)
            ->setLogin($login)
            ->setPassword($password)
            ->setRole($role)
            ->setStatus($status)
            ->setTelefone($telefone);
    }
}
