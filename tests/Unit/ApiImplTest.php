<?php

namespace Jetimob\NotaFacil\Tests\Unit;

use Jetimob\NotaFacil\Facades\NotaFacil;
use Jetimob\NotaFacil\Tests\AbstractTestCase;

class ApiImplTest extends AbstractTestCase
{
    /** @test */
    public function apiImplConfigShouldExitAndBeCorrectlyConfigured(): void
    {
        $apiImpl = config('notafacil.api_impl');
        $this->assertIsArray($apiImpl);
        $this->assertNotEmpty($apiImpl);
//        $this->assertArrayHasKey();

        foreach ($apiImpl as $api => $impl) {
            $this->assertTrue(class_exists($impl));
            $this->assertInstanceOf($impl, NotaFacil::{$api}());
        }
    }
}
