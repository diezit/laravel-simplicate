<?php

namespace CrixuAMG\Simplicate\Data\Employee;

use CrixuAMG\Simplicate\Data\AbstractDataObject;
use Illuminate\Support\Arr;

class TeamReference extends AbstractDataObject
{

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;


    public function __construct(array $data)
    {
        $this->id = Arr::get($data, 'id');
        $this->name = Arr::get($data, 'name');
    }

    public function toArray(): array
    {
        return [
            'id'   => $this->getId(),
            'name' => $this->getName(),
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

}
