<?php

namespace Jetimob\NotaFacil\Tests\Feature;

use Jetimob\NotaFacil\Api\Service\ServiceApi;
use Jetimob\NotaFacil\Entity\Service;
use Jetimob\NotaFacil\Facades\NotaFacil;
use Jetimob\NotaFacil\Tests\AbstractTestCase;

class ServiceApiTest extends AbstractTestCase
{
    protected ServiceApi $api;

    protected function setUp(): void
    {
        parent::setUp();
        $this->api = NotaFacil::service();
        $this->assertInstanceOf(ServiceApi::class, $this->api);
    }

    protected function assertServices(array $services): array
    {
        foreach ($services as $service) {
            $this->assertInstanceOf(Service::class, $service);
            $this->assertNotEmpty($service->getId());
            $this->assertNotEmpty($service->getCodigo());
        }

        return $services;
    }

    public function testList(): array
    {
        $response = $this->api->list();
        $this->assertSame(200, $response->getStatusCode());

        return $this->assertServices($response->getServices());
    }

    /**
     * @param Service[] $services
     *
     * @depends testList
     */
    public function testFind($services): void
    {
        if (empty($services)) {
            return;
        }

        $service = $services[0];
        $response = $this->api->find($service->getId());
        $this->assertSame(200, $response->getStatusCode());
        $this->assertSame($service->getId(), $response->getService()->getId());
        $this->assertSame($service->getCodigo(), $response->getService()->getCodigo());
    }

    public function testListCnae(): array
    {
        $response = $this->api->listCnae();
        $this->assertSame(200, $response->getStatusCode());

        return $this->assertServices($response->getServices());
    }

    /**
     * @param Service[] $services
     *
     * @depends testListCnae
     */
    public function testFindCnae($services): void
    {
        if (empty($services)) {
            return;
        }

        $service = $services[0];
        $response = $this->api->findCnae($service->getId());
        $this->assertSame(200, $response->getStatusCode());
        $this->assertSame($service->getId(), $response->getService()->getId());
        $this->assertSame($service->getCodigo(), $response->getService()->getCodigo());
    }
}
