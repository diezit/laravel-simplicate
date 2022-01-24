<?php

namespace CrixuAMG\Simplicate\Services\Domains;

use CrixuAMG\Simplicate\Contracts\Data\SimplicateResponseInterface;
use CrixuAMG\Simplicate\Contracts\Services\Domains\ProjectsDomainInterface;
use CrixuAMG\Simplicate\Data\Responses\ServiceSingleResponse;
use CrixuAMG\Simplicate\Data\Responses\ServicesListResponse;

class ProjectsDomain extends AbstractDomain implements ProjectsDomainInterface
{
    /**
     * @return string
     */
    public function path(): string
    {
        return 'projects';
    }

    /**
     * @return SimplicateResponseInterface|ServicesListResponse
     */
    public function allServices(): ServicesListResponse
    {
        return $this->client->responseClass(ServicesListResponse::class)
            ->get($this->prefixPath('service'));
    }

    /**
     * @param  string  $id
     * @return SimplicateResponseInterface|ServiceSingleResponse
     */
    public function service(string $id): ServiceSingleResponse
    {
        return $this->client->responseClass(ServiceSingleResponse::class)
            ->get($this->prefixPath('service/'.$id));
    }
}
