<?php

namespace CrixuAMG\Simplicate\Data\Crm;

use CrixuAMG\Simplicate\Data\AbstractDataObject;
use Illuminate\Support\Arr;

class PersonReference extends AbstractDataObject
{

    /**
     * @var string|null
     */
    protected $id;

    /**
     * @var string|null
     */
    protected $full_name;


    public function __construct(array $data)
    {
        $this->id = Arr::get($data, 'id');
        $this->full_name = Arr::get($data, 'full_name');
    }

    public function toArray(): array
    {
        $array = [
            'id'   => $this->getId(),
            'full_name' => $this->getFullName(),
        ];

        return $array;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getFullName(): ?string
    {
        return $this->full_name;
    }

}
