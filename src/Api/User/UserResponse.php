<?php

namespace Jetimob\NotaFacil\Api\User;

use Jetimob\NotaFacil\Api\NotaFacilResponse;
use Jetimob\NotaFacil\Entity\User;

class UserResponse extends NotaFacilResponse
{
    protected User $data;

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->data;
    }
}
