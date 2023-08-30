<?php

namespace CrixuAMG\Simplicate\Services\Domains;

use CrixuAMG\Simplicate\Data\Responses\DefaultServicesListResponse;
use CrixuAMG\Simplicate\Data\Responses\DefaultServiceSingleResponse;
use CrixuAMG\Simplicate\Contracts\Services\Domains\ServicesDomainInterface;

class ServicesDomain extends AbstractDomain implements ServicesDomainInterface
{
    /**
     * @return string
     */
    public function path(): string
    {
        return 'services';
    }

    public function allDefaultServices(): DefaultServicesListResponse
    {
        return $this->client->responseClass(DefaultServicesListResponse::class)
            ->get($this->prefixPath('defaultservice'));
    }

    public function defaultService(string $id): DefaultServiceSingleResponse
    {
        return $this->client->responseClass(DefaultServiceSingleResponse::class)
            ->get($this->prefixPath('defaultservice/' . $id));
    }

}
