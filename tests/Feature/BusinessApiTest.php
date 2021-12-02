<?php

namespace Jetimob\NotaFacil\Tests\Feature;

use Jetimob\NotaFacil\Api\Business\BusinessApi;
use Jetimob\NotaFacil\Api\Business\DTO\BusinessDTO;
use Jetimob\NotaFacil\Api\DTO\AddressDTO;
use Jetimob\NotaFacil\Facades\NotaFacil;
use Jetimob\NotaFacil\Tests\AbstractTestCase;

class BusinessApiTest extends AbstractTestCase
{
    protected BusinessApi $api;

    protected function setUp(): void
    {
        parent::setUp();
        $this->api = NotaFacil::business();
    }

    public function testAuthenticated(): void
    {
        dump($this->api->authenticated());
    }

    public function testCreation(): void
    {
        try {
            $res = $this->api->create($this->getBusinessDTO());
            $this->assertEquals(201, $res->getStatusCode());

            $business = $res->getBusiness();
            $this->assertIsInt($business->getId());
            $this->assertIsString($business->getConsumerId());
            $this->assertNotEquals('', $business->getConsumerId());

            dump($res);
        } catch (\Throwable $e) {
            dump($e->getTraceAsString());
        }
    }

    protected function getBusinessDTO(): BusinessDTO
    {
        return (new BusinessDTO())
            ->setEnderecoPrincipal(
                AddressDTO::newWithIbgeCity(
                    '4316907',
                    'R Appel',
                    'Nossa Sra. de Fátima',
                    '347',
                    '97015030'
                )
            )->setNomeRazaoSocial('ORUS TECNOLOGIA LTDA.')
            ->setNomeFantasia('Jetimob')
            ->setCnpjCpf('12544265000130')
            ->setEmail('contato@jetimob.com');

    }

    public function testList(): void
    {
        dump($this->api->list());
    }

}
