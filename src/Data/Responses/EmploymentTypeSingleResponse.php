<?php

namespace CrixuAMG\Simplicate\Data\Responses;

use CrixuAMG\Simplicate\Data\Employee\EmploymentType;

/**
 * Class EmploymentTypeSingleResponse
 *
 * @method EmploymentType getData()
 */
class EmploymentTypeSingleResponse extends AbstractDataResponse
{

    protected function setData($data)
    {
        $this->data = new EmploymentType($data);
    }

}
