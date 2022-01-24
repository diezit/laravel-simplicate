<?php

namespace CrixuAMG\Simplicate\Data\Employee;

use CrixuAMG\Simplicate\Data\AbstractDataObject;
use Illuminate\Support\Arr;

class EmployeeReference extends AbstractDataObject
{

    /**
     * @var string|null
     */
    protected $id;

    /**
     * @var null|string
     */
    protected $personId;

    /**
     * @var string|null
     */
    protected $name;


    public function __construct(array $data)
    {
        $this->id = Arr::get($data, 'id');
        $this->personId = Arr::get($data, 'person_id');
        $this->name = Arr::get($data, 'name');
    }

    public function getPersonId(): ?string
    {
        return $this->personId;
    }

    public function toArray(): array
    {
        $array = [
            'id'   => $this->getId(),
            'name' => $this->getName(),
        ];

        if ($this->personId) {
            $array['person_id'] = $this->personId;
        }

        return $array;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

}
