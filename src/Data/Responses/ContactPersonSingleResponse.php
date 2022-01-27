<?php

namespace CrixuAMG\Simplicate\Data\Responses;

use CrixuAMG\Simplicate\Contracts\Data\SimplicateResponseInterface;
use CrixuAMG\Simplicate\Data\Crm\ContactPerson;

/**
 * Class ContactPersonSingleResponse
 *
 * @method ContactPerson() getData()
 */
class ContactPersonSingleResponse extends AbstractDataResponse implements SimplicateResponseInterface
{
    protected function setData($data)
    {
        $this->data = new ContactPerson($data);
    }
}
