<?php

namespace CrixuAMG\Simplicate\Data\Responses;

use CrixuAMG\Simplicate\Data\Employee\Person;

/**
 * Class PersonSingleResponse
 *
 * @method Person() getData()
 */
class PersonSingleResponse extends AbstractDataResponse
{
    protected function setData($data)
    {
        $this->data = new Person($data);
    }
}
