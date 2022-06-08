<?php

namespace CrixuAMG\Simplicate\Data\Employee;

use Carbon\Carbon;
use CrixuAMG\Simplicate\Data\AbstractDataObject;
use CrixuAMG\Simplicate\Data\CustomField\CustomField;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

class Person extends AbstractDataObject
{
    /**
     * @var string
     */
    protected $id;

    /**
     * @var Carbon|null
     */
    protected $dateOfBirth;

    /**
     * Whether the date of birth's year is given.
     *
     * @var bool
     */
    protected $dateOfBirthHasYear = true;

    /**
     * @var string
     */
    protected $genderId;

    /**
     * @var string|null
     */
    protected $gender;

    /**
     * @var Address
     */
    protected $address;

    /**
     * @var string
     */
    protected $fullName;
    /**
     * @var array|\ArrayAccess|mixed
     */
    private $firstName;
    /**
     * @var array|\ArrayAccess|mixed
     */
    private $familyName;
    /**
     * @var array|\ArrayAccess|mixed
     */
    private $customFields;
    /**
     * @var array|\ArrayAccess|mixed
     */
    private $email;
    /**
     * @var string
     */
    private $phone;
    /**
     * @var string
     */
    private $initials;

    public function __construct(array $data)
    {
        $dateOfBirth = Arr::get($data, 'date_of_birth');

        if (is_string($dateOfBirth)) {
            if ($dateOfBirth == '0000-00-00') {
                $dateOfBirth = null;
            } elseif (preg_match('#^-?0000(.*)$#', $dateOfBirth, $matches)) {
                $dateOfBirth = '1900'.$matches[1];
            }
        }

        $this->id = Arr::get($data, 'id');
        $this->dateOfBirth = $dateOfBirth ? new Carbon($dateOfBirth) : null;
        $this->genderId = Arr::get($data, 'gender_id');
        $this->gender = Arr::get($data, 'gender');
        $this->address = new Address(Arr::get($data, 'address', []));
        $this->email = Arr::get($data, 'email');
        $this->phone = Arr::get($data, 'phone');
        $this->fullName = Arr::get($data, 'full_name');
        $this->firstName = Arr::get($data, 'first_name');
        $this->familyName = Arr::get($data, 'family_name');
        $this->initials = Arr::get($data, 'initials');
        $this->customFields = new Collection(
            array_map(
                function (array $item) {
                    return new CustomField($item);
                },
                Arr::get($data, 'custom_fields', [])
            )
        );
    }

    public function toArray(): array
    {
        $dateOfBirth = $this->formatDate($this->getDateOfBirth());

        if ($dateOfBirth !== null && !$this->isDateOfBirthYearGiven()) {
            $dateOfBirth = '0000'.substr($dateOfBirth, 4);
        }

        return [
            'id'            => $this->getId(),
            'date_of_birth' => $dateOfBirth,
            'gender_id'     => $this->getGenderId(),
            'gender'        => $this->getGender(),
            'address'       => $this->getAddress()->toArray(),
            'email'         => $this->getEmail(),
            'full_name'     => $this->getFullName(),
            'first_name'    => $this->getFirstName(),
            'family_name'   => $this->getFamilyName(),
            'custom_fields' => $this->getCustomFields()->toArray(),
        ];
    }

    public function getDateOfBirth(): ?Carbon
    {
        return $this->dateOfBirth;
    }

    public function isDateOfBirthYearGiven(): bool
    {
        return $this->dateOfBirthHasYear;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getGenderId(): ?string
    {
        return $this->genderId;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    /**
     * @return array|\ArrayAccess|mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return array|\ArrayAccess|mixed
     */
    public function getFamilyName()
    {
        return $this->familyName;
    }

    /**
     * @return array|\ArrayAccess|mixed
     */
    public function getCustomFields()
    {
        return $this->customFields;
    }

    /**
     * @return array|\ArrayAccess|mixed
     */
    public function getEmail()
    {
        return $this->email;
    }
}
