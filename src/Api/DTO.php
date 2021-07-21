<?php

namespace Jetimob\NotaFacil\Api;

use Jetimob\Http\Traits\Serializable;
use Jetimob\NotaFacil\Exceptions\InvalidArgumentException;

abstract class DTO
{
    use Serializable;

    protected function assertInArray(
        $needle,
        array $haystack,
        ?string $message = null
    ): void {
        $message ??= sprintf(
            'O argumento "%s" não está presente na lista de argumentos válidos: [%s]',
            $needle,
            implode(', ', $haystack)
        );

        if (!in_array($needle, $haystack, true)) {
            throw new InvalidArgumentException($message);
        }
    }
}
