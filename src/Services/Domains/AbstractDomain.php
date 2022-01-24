<?php

namespace CrixuAMG\Simplicate\Services\Domains;

use CrixuAMG\Simplicate\Contracts\Services\SimplicateClientInterface;
use CrixuAMG\Simplicate\Contracts\Services\SimplicateDomainInterface;
use CrixuAMG\Simplicate\Services\FluentPassthruToClient;

abstract class AbstractDomain implements SimplicateDomainInterface
{
    use FluentPassthruToClient;


    /**
     * @var SimplicateClientInterface
     */
    protected $client;

    /**
     * @var null|string
     */
    protected $fluentEndpoint;


    public function __construct(SimplicateClientInterface $client)
    {
        $this->client = $client;
    }


    protected function getClient(): SimplicateClientInterface
    {
        return $this->client;
    }

    protected function prefixPath(string $path): string
    {
        return $this->path().'/'.$path;
    }

}
