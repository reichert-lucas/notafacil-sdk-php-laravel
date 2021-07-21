<?php

namespace Jetimob\NotaFacil\Tests\Feature;

use Jetimob\NotaFacil\Api\Business\BusinessApi;
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

    public function testList(): void
    {
        dump($this->api->list());
    }

}
