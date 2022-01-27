<?php

namespace CrixuAMG\Simplicate\Data\Responses;

use CrixuAMG\Simplicate\Contracts\Data\SimplicateResponseInterface;
use CrixuAMG\Simplicate\Data\Crm\Organisation;

/**
 * Class OrganisationSingleResponse
 *
 * @method Organisation() getData()
 */
class OrganisationSingleResponse extends AbstractDataResponse implements SimplicateResponseInterface
{
    protected function setData($data)
    {
        $this->data = new Organisation($data);
    }
}
