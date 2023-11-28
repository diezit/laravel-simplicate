<?php

namespace CrixuAMG\Simplicate\Contracts\Services\Domains;

use CrixuAMG\Simplicate\Data\Responses\DefaultServicesListResponse;
use CrixuAMG\Simplicate\Data\Responses\DefaultServiceSingleResponse;
use CrixuAMG\Simplicate\Contracts\Services\SimplicateDomainInterface;
use CrixuAMG\Simplicate\Data\Responses\ProjectSingleResponse;
use CrixuAMG\Simplicate\Data\Responses\ProjectsListResponse;
use CrixuAMG\Simplicate\Data\Responses\ServiceSingleResponse;
use CrixuAMG\Simplicate\Data\Responses\ServicesListResponse;

interface ServicesDomainInterface extends SimplicateDomainInterface
{
    public function allDefaultServices(): DefaultServicesListResponse;

    public function defaultService(string $id): DefaultServiceSingleResponse;
}
