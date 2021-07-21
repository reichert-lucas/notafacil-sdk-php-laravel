<?php

namespace Jetimob\NotaFacil\Api\User;

use GuzzleHttp\Psr7\Response;
use GuzzleHttp\RequestOptions;
use Jetimob\NotaFacil\Api\AbstractApi;
use Jetimob\NotaFacil\Api\User\DTO\UserDTO;

/**
 * @link https://docs.notafacil.io/?version=latest#86b2a82d-c178-40eb-9bdf-67522b2e39a1
 */
class UserApi extends AbstractApi
{
    /**
     * @param UserDTO $user
     *
     * @return UserResponse
     * @throws \JsonException
     * @throws \Throwable
     * @link https://docs.notafacil.io/?version=latest#48333b0e-f36e-4b06-ae35-9b07874bbc01
     */
    public function create(UserDTO $user): UserResponse
    {
        return $this->mappedPost('usuario/salvar', UserResponse::class, [
            RequestOptions::JSON => $user->toArray(),
        ]);
    }

    /**
     * Recupera a lista de todos os usuários da empresa
     *
     * @return UserListResponse
     * @throws \JsonException
     * @throws \Throwable
     * @link https://docs.notafacil.io/?version=latest#3b349b9a-f65e-4161-ba60-d509c5d778c5
     */
    public function list(): UserListResponse
    {
        return $this->mappedGet('usuario/todos', UserListResponse::class);
    }

    /**
     * Deletar um usuário por id
     *
     * @param int $userId ID do usuário
     *
     * @return Response
     * @throws \JsonException
     * @throws \Throwable
     * @link https://docs.notafacil.io/?version=latest#3da8edeb-90f5-4d48-b2b2-078023cf7596
     */
    public function delete(int $userId): Response
    {
        return $this->request('delete', 'usuario/deletar/' . $userId);
    }

    /**
     * Recuperar um usuário da empresa por id
     *
     * @param int $userId ID do usuário
     *
     * @return UserResponse
     * @throws \JsonException
     * @throws \Throwable
     * @link https://docs.notafacil.io/?version=latest#0e904e95-cc75-404a-870b-d5c6196c89c1
     */
    public function find(int $userId): UserResponse
    {
        return $this->mappedGet('usuario/id/' . $userId, UserResponse::class);
    }

    /**
     * @param int     $userId
     * @param UserDTO $user
     *
     * @return UserResponse
     * @throws \JsonException
     * @throws \Throwable
     * @Link https://docs.notafacil.io/?version=latest#46364abf-b2ae-44c6-8493-19444bb5b8a6
     */
    public function update(int $userId, UserDTO $user): UserResponse
    {
        return $this->mappedPut('usuario/atualizar/' . $userId, UserResponse::class, [
            RequestOptions::JSON => $user->toArray(),
        ]);
    }

    /**
     * Recuperar o usuário logado
     *
     * @return UserResponse
     * @throws \JsonException
     * @throws \Throwable
     * @link https://docs.notafacil.io/?version=latest#536a133c-3d84-4b0c-bd52-2ac542d1c32b
     */
    public function authenticatedUser(): UserResponse
    {
        return $this->mappedGet('usuario/logado', UserResponse::class);
    }
}
