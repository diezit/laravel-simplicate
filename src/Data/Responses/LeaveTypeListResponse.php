<?php

namespace CrixuAMG\Simplicate\Data\Responses;

use CrixuAMG\Simplicate\Contracts\Data\SimplicateResponseInterface;
use CrixuAMG\Simplicate\Data\Leave\LeaveType;
use Illuminate\Support\Collection;

/**
 * Class LeaveTypeListResponse
 *
 * @method Collection|LeaveType[] getData()
 */
class LeaveTypeListResponse extends AbstractDataResponse implements SimplicateResponseInterface
{

    protected function setData($data)
    {
        $this->data = new Collection(
            array_map(
                function (array $item) {
                    return new LeaveType($item);
                },
                $data
            )
        );
    }

}
