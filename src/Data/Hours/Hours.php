<?php

namespace Czim\Simplicate\Data\Hours;

use Czim\Simplicate\Data\AbstractDataObject;
use Czim\Simplicate\Data\Employee\CustomField;
use Czim\Simplicate\Data\Employee\EmployeeReference;
use Czim\Simplicate\Data\Project\ProjectReference;
use Czim\Simplicate\Data\Service\ServiceReference;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class Hours extends AbstractDataObject
{

    /**
     * @var string
     */
    protected $id;

    /**
     * @var EmployeeReference
     */
    protected $employee;

    /**
     * @var ProjectReference
     */
    protected $project;

    /**
     * @var ServiceReference
     */
    protected $projectService;

    /**
     * @var Type
     */
    protected $type;

    /**
     * @var float
     */
    protected $tariff;

    /**
     * @var Carbon
     */
    protected $createdAt;

    /**
     * @var Carbon|null
     */
    protected $updatedAt;

    /**
     * @var bool
     */
    protected $locked;

    /**
     * @var float
     */
    protected $hours;

    /**
     * @var Carbon|null
     */
    protected $startDate;

    /**
     * @var Carbon|null
     */
    protected $endDate;

    /**
     * @var bool
     */
    protected $isTimeDefined;

    /**
     * @var string|null
     */
    protected $note;

    /**
     * @var Collection|CustomField[]
     */
    protected $customFields;

    /**
     * @var string
     */
    protected $source;


    public function __construct(array $data)
    {
        $this->id             = array_get($data, 'id');
        $this->employee       = new EmployeeReference(array_get($data, 'employee', []));
        $this->project        = new ProjectReference(array_get($data, 'project', []));
        $this->projectService = new ServiceReference(array_get($data, 'projectservice', []));
        $this->type           = new Type(array_get($data, 'hours', []));
        $this->tariff         = (float) array_get($data, 'tariff');
        $this->createdAt      = $this->castStringAsDate(array_get($data, 'created_at'));
        $this->updatedAt      = $this->castStringAsDate(array_get($data, 'updated_at'));
        $this->locked         = (bool) array_get($data, 'locked');
        $this->hours          = (float) array_get($data, 'hours');
        $this->startDate      = $this->castStringAsDate(array_get($data, 'start_date'));
        $this->endDate        = $this->castStringAsDate(array_get($data, 'end_date'));
        $this->isTimeDefined  = (bool) array_get($data, 'is_time_defined');
        $this->note           = array_get($data, 'note');
        $this->source         = array_get($data, 'source');

        $this->customFields = new Collection(
            array_map(
                function (array $item) {
                    return new CustomField($item);
                },
                $data
            )
        );
    }


    public function getId(): string
    {
        return $this->id;
    }

    public function getEmployee(): EmployeeReference
    {
        return $this->employee;
    }

    public function getProject(): ProjectReference
    {
        return $this->project;
    }

    public function getProjectService(): ServiceReference
    {
        return $this->projectService;
    }

    public function getType(): Type
    {
        return $this->type;
    }

    public function getTariff(): float
    {
        return $this->tariff;
    }

    public function getCreatedAt(): Carbon
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): ?Carbon
    {
        return $this->updatedAt;
    }

    public function isLocked(): bool
    {
        return $this->locked;
    }

    public function getHours(): float
    {
        return $this->hours;
    }

    public function getStartDate(): ?Carbon
    {
        return $this->startDate;
    }

    public function getEndDate(): ?Carbon
    {
        return $this->endDate;
    }

    public function isTimeDefined(): bool
    {
        return $this->isTimeDefined;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * @return CustomField[]|Collection
     */
    public function getCustomFields()
    {
        return $this->customFields;
    }

    public function getSource(): string
    {
        return $this->source;
    }

    public function toArray(): array
    {
        return [
            'id'              => $this->getId(),
            'employee'        => $this->getEmployee()->toArray(),
            'project'         => $this->getProject()->toArray(),
            'projectservice'  => $this->getProjectService()->toArray(),
            'type'            => $this->getType()->toArray(),
            'tariff'          => $this->getTariff(),
            'created_at'      => $this->formatDate($this->getCreatedAt()),
            'updated_at'      => $this->formatDate($this->getUpdatedAt()),
            'locked'          => $this->isLocked(),
            'hours'           => $this->getHours(),
            'start_date'      => $this->formatDate($this->getStartDate()),
            'end_date'        => $this->formatDate($this->getUpdatedAt()),
            'is_time_defined' => $this->isTimeDefined(),
            'note'            => $this->getNote(),
            'custom_fields'   => $this->getCustomFields()->toArray(),
            'source'          => $this->getSource(),
        ];
    }

}
