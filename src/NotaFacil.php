<?php

namespace Jetimob\NotaFacil;

use Jetimob\Http\Contracts\HttpProviderContract;
use Jetimob\Http\Http;
use Jetimob\NotaFacil\Exceptions\RuntimeException;

class NotaFacil implements HttpProviderContract
{
    protected Http $client;
    protected array $config;

    public function __construct(array $config = [])
    {
        $this->client = new Http($config['http'] ?? []);
        $this->config = $config;
    }

    /**
     * @return Http
     */
    public function getHttpInstance(): Http
    {
        return $this->client;
    }

    /**
     * @return array
     */
    public function getConfig(): array
    {
        return $this->config ?? [];
    }

    public function __call(string $name, array $arguments)
    {
        if (!($apiImpl = $this->config['api_impl'] ?? null) || !array_key_exists($name, $apiImpl)) {
            throw new RuntimeException("O endpoint '$name' não foi implementado ou não existe");
        }

        return new $apiImpl[$name]($this);
    }
}
