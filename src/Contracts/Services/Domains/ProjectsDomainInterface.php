<?php

namespace CrixuAMG\Simplicate\Contracts\Services\Domains;

use CrixuAMG\Simplicate\Contracts\Services\SimplicateDomainInterface;
use CrixuAMG\Simplicate\Data\Responses\ProjectSingleResponse;
use CrixuAMG\Simplicate\Data\Responses\ProjectsListResponse;
use CrixuAMG\Simplicate\Data\Responses\ServiceSingleResponse;
use CrixuAMG\Simplicate\Data\Responses\ServicesListResponse;

interface ProjectsDomainInterface extends SimplicateDomainInterface
{
    public function allServices(): ServicesListResponse;

    public function service(string $id): ServiceSingleResponse;

    public function allProjects(): ProjectsListResponse;

    public function project(string $id): ProjectSingleResponse;
}
