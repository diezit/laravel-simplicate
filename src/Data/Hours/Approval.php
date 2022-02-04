<?php

namespace CrixuAMG\Simplicate\Data\Hours;

use CrixuAMG\Simplicate\Data\AbstractDataObject;

class Approval extends AbstractDataObject
{
    private array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function toArray()
    {
        return (array)$this->data;
    }
}
