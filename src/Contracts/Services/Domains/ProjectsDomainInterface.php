<?php

namespace CrixuAMG\Simplicate\Contracts\Services\Domains;

use CrixuAMG\Simplicate\Contracts\Services\SimplicateDomainInterface;
use CrixuAMG\Simplicate\Data\Responses\ServiceSingleResponse;
use CrixuAMG\Simplicate\Data\Responses\ServicesListResponse;

interface ProjectsDomainInterface extends SimplicateDomainInterface
{

    public function allServices(): ServicesListResponse;

    public function service(string $id): ServiceSingleResponse;

}
