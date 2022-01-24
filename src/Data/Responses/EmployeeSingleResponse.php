<?php

namespace CrixuAMG\Simplicate\Data\Responses;

use CrixuAMG\Simplicate\Data\Employee\Employee;

/**
 * Class EmployeeSingleResponse
 *
 * @method Employee() getData()
 */
class EmployeeSingleResponse extends AbstractDataResponse
{

    protected function setData($data)
    {
        $this->data = new Employee($data);
    }

}
