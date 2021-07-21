<?php

namespace Jetimob\NotaFacil\Tests\Feature;

use Jetimob\NotaFacil\Api\Cities\CitiesApi;
use Jetimob\NotaFacil\Api\Cities\CitiesListResponse;
use Jetimob\NotaFacil\Api\Cities\ListCitiesParams;
use Jetimob\NotaFacil\Facades\NotaFacil;
use Jetimob\NotaFacil\Tests\AbstractTestCase;

class CitiesApiTest extends AbstractTestCase
{
    protected CitiesApi $api;

    protected function setUp(): void
    {
        parent::setUp();
        $this->api = NotaFacil::cities();
        $this->assertInstanceOf(CitiesApi::class, $this->api);
    }

    public function testCitiesList(): void
    {
        $response = $this->api->list();
        $this->assertInstanceOf(CitiesListResponse::class, $response);
        $cities = $response->getCities();
        $this->assertNotEmpty($cities);
        $city = $cities[0];
        $this->assertNotEmpty($city->getId());
        $this->assertNotEmpty($city->getCodigoIbge());
        $this->assertNotEmpty($city->getEstado());
        $this->assertNotEmpty($city->getCodigoIbge());
        $this->assertNotEmpty($city->getNome());
        $state = $city->getEstado();
        $this->assertNotEmpty($state->getEstado());
        $this->assertNotEmpty($state->getCodigoIbge());
        $this->assertNotEmpty($state->getSigla());
        $this->assertNotEmpty($state->getId());
    }

    public function testCitiesListWithParams(): void
    {
        $response = $this->api->list((new ListCitiesParams())->setEstado('RS'));
        $cities = $response->getCities();
        $this->assertNotEmpty($cities);

        foreach ($cities as $city) {
           $this->assertSame('RS', $city->getEstado()->getSigla());
        }
    }

    public function testHomologatedList(): void
    {
        $response = $this->api->homologated();
        $cities = $response->getCities();
        $this->assertNotEmpty($cities);
    }
}
