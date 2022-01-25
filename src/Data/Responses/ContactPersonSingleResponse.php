<?php

namespace CrixuAMG\Simplicate\Data\Responses;

use CrixuAMG\Simplicate\Data\Crm\ContactPerson;

/**
 * Class ContactPersonSingleResponse
 *
 * @method ContactPerson() getData()
 */
class ContactPersonSingleResponse extends AbstractDataResponse
{
    protected function setData($data)
    {
        $this->data = new ContactPerson($data);
    }
}
