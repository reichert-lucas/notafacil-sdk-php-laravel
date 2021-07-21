<?php

namespace Jetimob\NotaFacil\Api\User;

use Jetimob\NotaFacil\Api\PaginatedNotaFacilResponse;
use Jetimob\NotaFacil\Entity\User;

/**
 * @link https://docs.notafacil.io/?version=latest#3b349b9a-f65e-4161-ba60-d509c5d778c5
 */
class UserListResponse extends PaginatedNotaFacilResponse
{
    /** @var User[] */
    protected array $data;

    /**
     * @return string
     */
    public function dataItemType(): string
    {
        return User::class;
    }

    /**
     * @return User[]
     */
    public function getUsers(): array
    {
        return $this->data;
    }
}
