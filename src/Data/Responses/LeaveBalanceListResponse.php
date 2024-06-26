<?php

namespace CrixuAMG\Simplicate\Data\Responses;

use CrixuAMG\Simplicate\Contracts\Data\SimplicateResponseInterface;
use CrixuAMG\Simplicate\Data\Leave\LeaveBalance;
use Illuminate\Support\Collection;

/**
 * Class LeaveBalanceListResponse
 *
 * @method Collection|LeaveBalance[] getData()
 */
class LeaveBalanceListResponse extends AbstractDataResponse implements SimplicateResponseInterface
{

    protected function setData($data)
    {
        $this->data = new Collection(
            array_map(
                function (array $item) {
                    return new LeaveBalance($item);
                },
                $data
            )
        );
    }

}
