<?php

namespace Jetimob\NotaFacil\Facades;

use Illuminate\Support\Facades\Facade;

class NotaFacil extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'jetimob.notafacil';
    }
}
