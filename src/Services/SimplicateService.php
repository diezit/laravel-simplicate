<?php

namespace CrixuAMG\Simplicate\Services;

use CrixuAMG\Simplicate\Contracts\Services\Domains;
use CrixuAMG\Simplicate\Contracts\Services\SimplicateClientInterface;
use CrixuAMG\Simplicate\Contracts\Services\SimplicateServiceInterface;
use CrixuAMG\Simplicate\Services\Domains\CrmDomain;
use CrixuAMG\Simplicate\Services\Domains\HoursDomain;
use CrixuAMG\Simplicate\Services\Domains\HrmDomain;
use CrixuAMG\Simplicate\Services\Domains\ProjectsDomain;

class SimplicateService implements SimplicateServiceInterface
{
    /**
     * @var SimplicateClientInterface
     */
    protected $client;

    /**
     * @var Domains\HoursDomainInterface
     */
    protected $hours;

    /**
     * @var Domains\HrmDomainInterface
     */
    protected $hrm;

    /**
     * @var Domains\ProjectsDomainInterface
     */
    protected $projects;
    protected $crm;


    public function __construct(SimplicateClientInterface $client)
    {
        $this->client = $client;

        $this->hours = new HoursDomain($client);
        $this->hrm = new HrmDomain($client);
        $this->projects = new ProjectsDomain($client);
        $this->crm = new CrmDomain($client);
    }

    public function getClient(): SimplicateClientInterface
    {
        return $this->client;
    }

    public function setAuthentication(string $key, string $secret): SimplicateServiceInterface
    {
        $this->client->setAuthentication($key, $secret);

        return $this;
    }

    public function hours(): Domains\HoursDomainInterface
    {
        return $this->hours;
    }

    public function hrm(): Domains\HrmDomainInterface
    {
        return $this->hrm;
    }

    public function crm(): Domains\CrmDomainInterface
    {
        return $this->crm;
    }

    public function projects(): Domains\ProjectsDomainInterface
    {
        return $this->projects;
    }

}
