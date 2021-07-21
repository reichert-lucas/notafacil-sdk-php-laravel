<?php

namespace Jetimob\NotaFacil\Tests;

use Illuminate\Support\Str;
use Jetimob\NotaFacil\Facades\NotaFacil;
use Jetimob\NotaFacil\NotaFacilServiceProvider;
use Orchestra\Testbench\TestCase;

class AbstractTestCase extends TestCase
{
    /** @inheritDoc */
    protected function setUp(): void
    {
        parent::setUp();
//        $this->assertSame('sandbox', env('NOTAFACIL_ENVIRONMENT', 'sandbox'), );
        NotaFacil::getHttpInstance()->overwriteConfig(
            'oauth_access_token_repository',
            \Jetimob\Http\Authorization\OAuth\Storage\FileCacheRepository::class,
        );
    }

    /** @inheritDoc */
    protected function getPackageProviders($app)
    {
        return [NotaFacilServiceProvider::class];
    }
}
