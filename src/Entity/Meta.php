<?php

namespace Jetimob\NotaFacil\Entity;

use Jetimob\Http\Traits\Serializable;

class Meta
{
    use Serializable;

    protected string $current_page;
    protected string $from;
    protected string $last_page;
    protected string $path;
    protected string $per_page;
    protected string $to;
    protected string $total;

    /**
     * @return string
     */
    public function getCurrentPage(): string
    {
        return $this->current_page;
    }

    /**
     * @return string
     */
    public function getFrom(): string
    {
        return $this->from;
    }

    /**
     * @return string
     */
    public function getLastPage(): string
    {
        return $this->last_page;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @return string
     */
    public function getPerPage(): string
    {
        return $this->per_page;
    }

    /**
     * @return string
     */
    public function getTo(): string
    {
        return $this->to;
    }

    /**
     * @return string
     */
    public function getTotal(): string
    {
        return $this->total;
    }
}
