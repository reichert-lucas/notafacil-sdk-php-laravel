<?php

namespace Jetimob\NotaFacil\Tests\Feature;

use Jetimob\NotaFacil\Api\User\UserApi;
use Jetimob\NotaFacil\Entity\Permission;
use Jetimob\NotaFacil\Entity\Role;
use Jetimob\NotaFacil\Entity\User;
use Jetimob\NotaFacil\Facades\NotaFacil;
use Jetimob\NotaFacil\Tests\AbstractTestCase;

class UserApiTest extends AbstractTestCase
{
    protected UserApi $api;

    protected function setUp(): void
    {
        parent::setUp();
        $this->api = NotaFacil::user();
    }

    public function testList(): int
    {
        $response = $this->api->list();
        $users = $response->getUsers();
        $this->assertNotEmpty($users);

        foreach ($users as $user) {
            $this->assertInstanceOf(User::class, $user);
            $this->assertNotEmpty($user->getId());
            $this->assertNotEmpty($user->getNome());
            $this->assertNotEmpty($user->getEmail());
            $this->assertNotEmpty($user->getCpf());
            $roles = $user->getRole();
            $this->assertNotEmpty($roles);
            $role = $roles[0];
            $this->assertInstanceOf(Role::class, $role);
            $permissions = $role->getPermissions();
            $this->assertNotEmpty($permissions);
            $permission = $permissions[0];
            $this->assertInstanceOf(Permission::class, $permission);
        }

        $firstUserIdFound = $users[0]->getId();

        return $firstUserIdFound;
    }

    public function testAuthenticated(): void
    {
        $response = $this->api->authenticatedUser();
        $this->assertSame(200, $response->getStatusCode());
        $this->assertNotEmpty($response->getUser());
    }

    /**
     * @depends testList
     */
    public function testFind(int $userId): void
    {
        $response = $this->api->find($userId);
        $this->assertSame(200, $response->getStatusCode());
        $this->assertSame($userId, $response->getUser()->getId());
    }
}
