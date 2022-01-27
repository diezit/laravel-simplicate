<?php

namespace CrixuAMG\Simplicate\Data\Responses;

use CrixuAMG\Simplicate\Contracts\Data\SimplicateResponseInterface;
use CrixuAMG\Simplicate\Data\Leave\LeaveType;

/**
 * Class LeaveTypeSingleResponse
 *
 * @method LeaveType getData()
 */
class LeaveTypeSingleResponse extends AbstractDataResponse implements SimplicateResponseInterface
{

    protected function setData($data)
    {
        $this->data = new LeaveType($data);
    }

}
