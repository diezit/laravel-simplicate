<?php

namespace CrixuAMG\Simplicate\Data\Project;

use CrixuAMG\Simplicate\Data\AbstractDataObject;
use Illuminate\Support\Arr;

class ProjectStatus extends AbstractDataObject
{
    /**
     * @var string|null
     */
    protected $id;

    /**
     * @var string|null
     */
    protected $label;


    public function __construct(array $data)
    {
        $this->id = Arr::get($data, 'id');
        $this->label = Arr::get($data, 'label');
    }

    public function toArray(): array
    {
        return [
            'id'    => $this->getId(),
            'label' => $this->getLabel(),
        ];
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }
}
