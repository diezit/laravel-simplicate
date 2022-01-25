<?php

namespace CrixuAMG\Simplicate\Contracts\Services\Domains;

use CrixuAMG\Simplicate\Contracts\Services\SimplicateDomainInterface;
use CrixuAMG\Simplicate\Data\Responses\ContactPersonListResponse;
use CrixuAMG\Simplicate\Data\Responses\ContactPersonSingleResponse;
use CrixuAMG\Simplicate\Data\Responses\PersonListResponse;
use CrixuAMG\Simplicate\Data\Responses\PersonSingleResponse;

interface CrmDomainInterface extends SimplicateDomainInterface
{
    public function allPersons(): PersonListResponse;

    public function person(string $id): PersonSingleResponse;

    public function allContactPersons(): ContactPersonListResponse;

    public function contactPerson(string $id): ContactPersonSingleResponse;
}
