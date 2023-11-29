<?php

namespace CrixuAMG\Simplicate\Data\Crm;

use CrixuAMG\Simplicate\Data\AbstractDataObject;
use CrixuAMG\Simplicate\Data\Project\OrganizationReference;
use Illuminate\Support\Arr;

class ContactPerson extends AbstractDataObject
{
    private ?string $id;
    private ?string $work_function;
    private ?string $work_email;
    private ?string $work_mobile;
    private OrganizationReference $organization;
    private PersonReference $person;

    public function __construct(array $data)
    {
        $this->id = Arr::get($data, 'id');
        $this->work_function = Arr::get($data, 'work_function');
        $this->work_email = Arr::get($data, 'work_email');
        $this->work_mobile = Arr::get($data, 'work_mobile');
        $this->organization = new OrganizationReference(Arr::get($data, 'organization', []));
        $this->person = new PersonReference(Arr::get($data, 'person', []));
    }

    public function toArray(): array
    {
        return [
            'id' => $this->getId(),
            'work_function' => $this->getWorkFunction(),
            'work_email' => $this->getWorkEmail(),
            'work_mobile' => $this->getWorkMobile(),
            'organization' => $this->getOrganization()->toArray(),
            'person' => $this->getPerson()->toArray(),
        ];
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getWorkFunction(): ?string
    {
        return $this->work_function;
    }

    public function getWorkEmail(): ?string
    {
        return $this->work_email;
    }

    public function getWorkMobile(): ?string
    {
        return $this->work_mobile;
    }

    public function getOrganization(): OrganizationReference
    {
        return $this->organization;
    }

    public function getPerson(): PersonReference
    {
        return $this->person;
    }

}
