<?php

namespace CrixuAMG\Simplicate\Data\CustomField;

use CrixuAMG\Simplicate\Data\AbstractDataObject;
use Illuminate\Support\Arr;

class CustomField extends AbstractDataObject
{

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $label;

    /**
     * @var string
     */
    protected $renderType;

    /**
     * @var int
     */
    protected $position;

    /**
     * @var string
     */
    protected $valueType;

    /**
     * @var string
     */
    protected $value;

    /**
     * @var array
     */
    protected $options;

    public function __construct(array $data)
    {
        $this->id = Arr::get($data, 'id');
        $this->name = Arr::get($data, 'name');
        $this->label = Arr::get($data, 'label');
        $this->renderType = Arr::get($data, 'render_type');
        $this->position = (int) Arr::get($data, 'position');
        $this->valueType = Arr::get($data, 'value_type');
        $this->value = Arr::get($data, 'value');
        $this->options = Arr::get($data, 'options', []);
    }

    public function toArray(): array
    {
        return [
            'id'          => $this->getId(),
            'name'        => $this->getName(),
            'label'       => $this->getLabel(),
            'render_type' => $this->getRenderType(),
            'position'    => $this->getPosition(),
            'value_type'  => $this->getValueType(),
            'value'       => $this->getValue(),
            'options'     => $this->getOptions(),
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

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getRenderType(): string
    {
        return $this->renderType;
    }

    public function getPosition(): int
    {
        return $this->position;
    }

    public function getValueType(): string
    {
        return $this->valueType;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function getOptions(): array
    {
        return $this->options;
    }
}
