<?php

namespace CrixuAMG\Simplicate\Data\Project;

use CrixuAMG\Simplicate\Data\AbstractDataObject;
use CrixuAMG\Simplicate\Data\Crm\ContactPersonReference;
use CrixuAMG\Simplicate\Data\CustomField\CustomField;
use CrixuAMG\Simplicate\Data\Employee\EmployeeReference;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

/**
 *
 */
class Project extends AbstractDataObject
{
    /**
     * @var string|null
     */
    protected $id;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var OrganizationReference|null
     */
    protected $organization;

    /**
     * @var EmployeeReference|null
     */
    protected $projectManager;

    /**
     * @var Collection
     */
    protected $customFields;
    /**
     * @var ProjectStatus
     */
    protected $projectStatus;

    protected ContactPersonReference $contact;

    /**
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->id = Arr::get($data, 'id');
        $this->name = Arr::get($data, 'name');
        $this->organization = new OrganizationReference(Arr::get($data, 'organization', []));
        $this->projectManager = new EmployeeReference(Arr::get($data, 'project_manager', []));
        $this->contact = new ContactPersonReference(Arr::get($data, 'contact', []));
        $this->projectStatus = new ProjectStatus(Arr::get($data, 'project_status'));
        $this->customFields = new Collection(
            array_map(
                function (array $item) {
                    return new CustomField($item);
                },
                Arr::get($data, 'custom_fields', [])
            )
        );
    }

    /**
     * @return null[]|string[]
     */
    public function toArray(): array
    {
        $array = [
            'id'   => $this->getId(),
            'name' => $this->getName(),
        ];

        if ($this->getOrganization()) {
            $array['organization'] = $this->getOrganization()->toArray();
        }

        if ($this->getCustomFields()) {
            $array['custom_fields'] = $this->getCustomFields()->toArray();
        }

        if ($this->getProjectStatus()) {
            $array['project_status'] = $this->getProjectStatus()->toArray();
        }

        if ($this->getProjectManager()) {
            $array['project_manager'] = $this->getProjectManager()->toArray();
        }

        return $array;
    }

    /**
     * @return OrganizationReference|null
     */
    public function getOrganization(): ?OrganizationReference
    {
        return $this->organization;
    }

    /**
     * @return EmployeeReference|null
     */
    public function getProjectManager(): ?EmployeeReference
    {
        return $this->projectManager;
    }

    public function getContact(): ContactPersonReference
    {
        return $this->contact;
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return Collection
     */
    public function getCustomFields(): Collection
    {
        return $this->customFields;
    }

    /**
     * @return ProjectStatus
     */
    public function getProjectStatus(): ProjectStatus
    {
        return $this->projectStatus;
    }
}
