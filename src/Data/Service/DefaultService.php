<?php

namespace CrixuAMG\Simplicate\Data\Service;

use Illuminate\Support\Arr;
use CrixuAMG\Simplicate\Data\Hours\VatClass;
use CrixuAMG\Simplicate\Data\AbstractDataObject;

class DefaultService extends AbstractDataObject
{
    protected $id;
    protected $name;
    protected $defaultServiceId;
    protected $revenueGroupId;
    protected $vatClass;

    public function __construct(array $data)
    {
        $this->id = Arr::get($data, 'id');
        $this->name = Arr::get($data, 'name');
        $this->revenueGroupId = Arr::get($data, 'revenue_group_id');
        $this->vatClass = new VatClass(Arr::get($data, 'vat_class'));
    }

    public function toArray(): array
    {
        $array = [
            'id'               => $this->getId(),
            'name'             => $this->getName(),
            'revenue_group_id' => $this->getRevenueGroupId(),
            'vat_class'        => $this->getVatClass()->toArray(),
        ];

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

    public function getRevenueGroupId(): ?string
    {
        return $this->revenueGroupId;
    }

    public function getVatClass(): ?VatClass
    {
        return $this->vatClass;
    }
}
