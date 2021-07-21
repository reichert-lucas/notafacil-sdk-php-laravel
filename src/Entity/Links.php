<?php

namespace Jetimob\NotaFacil\Entity;

use Jetimob\Http\Traits\Serializable;

class Links
{
    use Serializable;

    protected string $first_page_url;
    protected string $last_page_url;
    protected ?string $next_page_url;
    protected ?string $prev_page_url;

    /**
     * @return string
     */
    public function getFirstPageUrl(): string
    {
        return $this->first_page_url;
    }

    /**
     * @return string
     */
    public function getLastPageUrl(): string
    {
        return $this->last_page_url;
    }

    /**
     * @return string|null
     */
    public function getNextPageUrl(): ?string
    {
        return $this->next_page_url;
    }

    /**
     * @return string|null
     */
    public function getPrevPageUrl(): ?string
    {
        return $this->prev_page_url;
    }
}
