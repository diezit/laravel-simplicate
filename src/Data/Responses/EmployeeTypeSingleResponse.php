<?php

namespace CrixuAMG\Simplicate\Data\Responses;

use CrixuAMG\Simplicate\Data\Employee\Type;

/**
 * Class EmployeeTypeSingleResponse
 *
 * @method Type getData()
 */
class EmployeeTypeSingleResponse extends AbstractDataResponse
{

    protected function setData($data)
    {
        $this->data = new Type($data);
    }

}
