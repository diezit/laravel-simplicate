<?php

namespace CrixuAMG\Simplicate\Data\Crm;

use CrixuAMG\Simplicate\Data\AbstractDataObject;
use CrixuAMG\Simplicate\Data\Project\OrganizationReference;
use Illuminate\Support\Arr;

class ContactPersonReference extends AbstractDataObject
{
    protected ?string $id;

    protected PersonReference $personReference;

    protected OrganizationReference $organizationReference;


    public function __construct(array $data)
    {
        $this->id = Arr::get($data, 'id');
        $this->personReference = new PersonReference(Arr::get($data, 'person', []));
        $this->organizationReference = new OrganizationReference(Arr::get($data, 'organization', []));
    }

    public function toArray(): array
    {
        $array = [
            'id'   => $this->getId(),
            'person_reference' => $this->getPersonReference()->toArray(),
            'organization_reference' => $this->getOrganizationReference()->toArray(),
        ];

        return $array;
    }

    public function getPersonReference(): PersonReference
    {
        return $this->personReference;
    }

    public function getOrganizationReference(): OrganizationReference
    {
        return $this->organizationReference;
    }

    public function getId(): ?string
    {
        return $this->id;
    }
    
}
