<?php

namespace CrixuAMG\Simplicate\Data\Hours;

use CrixuAMG\Simplicate\Data\AbstractDataObject;
use Illuminate\Support\Arr;

class TypeReference extends AbstractDataObject
{

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var VatClass
     */
    protected $vatClass;

    /**
     * @var string
     */
    protected $label;

    /**
     * @var float|null
     */
    protected $tariff;


    public function __construct(array $data)
    {
        $this->id = Arr::get($data, 'id');
        $this->type = Arr::get($data, 'type');
        $this->label = Arr::get($data, 'label');
        $this->tariff = Arr::has($data, 'tariff') ? (float) Arr::get($data, 'tariff') : null;
        $this->vatClass = Arr::get($data, 'vatclass', []) ? new VatClass(Arr::get($data, 'vatclass', [])) : null;
    }

    public function toArray(): array
    {
        return [
            'id'       => $this->getId(),
            'type'     => $this->getType(),
            'label'    => $this->getLabel(),
            'tariff'   => $this->getTariff(),
            'vatclass' => $this->getVatClass() ? $this->getVatClass()->toArray() : null,
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getVatClass(): ?VatClass
    {
        return $this->vatClass;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getTariff(): ?float
    {
        return $this->tariff;
    }

}
