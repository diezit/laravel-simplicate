<?php

namespace CrixuAMG\Simplicate\Services;

use CrixuAMG\Simplicate\Contracts\Services\Domains;
use CrixuAMG\Simplicate\Services\Domains\CrmDomain;
use CrixuAMG\Simplicate\Services\Domains\HrmDomain;
use CrixuAMG\Simplicate\Services\Domains\HoursDomain;
use CrixuAMG\Simplicate\Services\Domains\ServicesDomain;
use CrixuAMG\Simplicate\Services\Domains\ProjectsDomain;
use CrixuAMG\Simplicate\Contracts\Services\SimplicateClientInterface;
use CrixuAMG\Simplicate\Contracts\Services\SimplicateServiceInterface;

class SimplicateService implements SimplicateServiceInterface
{
    protected $client;
    protected $hours;
    protected $hrm;
    protected $projects;
    protected $crm;
    protected $services;


    public function __construct(SimplicateClientInterface $client)
    {
        $this->client = $client;

        $this->hours = new HoursDomain($client);
        $this->hrm = new HrmDomain($client);
        $this->projects = new ProjectsDomain($client);
        $this->crm = new CrmDomain($client);
        $this->services = new ServicesDomain($client);
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

    public function services(): Domains\ServicesDomainInterface
    {
        return $this->services;
    }

}
