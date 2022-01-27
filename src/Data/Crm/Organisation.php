<?php

namespace CrixuAMG\Simplicate\Data\Crm;

use CrixuAMG\Simplicate\Data\AbstractDataObject;

class Organisation extends AbstractDataObject
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