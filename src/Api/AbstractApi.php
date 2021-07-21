<?php

namespace Jetimob\NotaFacil\Api;

use Jetimob\Http\Request;
use Jetimob\NotaFacil\Exceptions\InvalidArgumentException;
use Jetimob\NotaFacil\Exceptions\NotaFacilRequestException;
use Jetimob\NotaFacil\NotaFacil;

abstract class AbstractApi extends \Jetimob\Http\AbstractApi
{
    private string $consumerId;
    protected ?string $exceptionClass = NotaFacilRequestException::class;

    public function __construct(NotaFacil $notaFacil)
    {
        parent::__construct($notaFacil);
        $this->consumerId = config('notafacil.consumer_id', '');
    }

    /**
     * @return string
     */
    public function getConsumerId(): string
    {
        return $this->consumerId;
    }

    public function using(string $consumerId): void
    {
        if (empty($consumerId)) {
            throw new InvalidArgumentException('O ID do consumidor NÃO pode ser vazio!');
        }

        $this->consumerId = $consumerId;
    }

    protected function makeBaseRequest($method, $path, array $headers = [], $body = null): Request
    {
        return (new AuthorizedRequest($method, $path, $headers, $body))
            ->withAddedHeader('Consumer-Id', $this->getConsumerId());
    }
}
