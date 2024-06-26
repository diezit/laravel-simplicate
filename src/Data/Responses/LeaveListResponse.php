<?php

namespace CrixuAMG\Simplicate\Data\Responses;

use CrixuAMG\Simplicate\Contracts\Data\SimplicateResponseInterface;
use CrixuAMG\Simplicate\Data\Leave\Leave;
use Illuminate\Support\Collection;

/**
 * Class LeaveListResponse
 *
 * @method Collection|Leave[] getData()
 */
class LeaveListResponse extends AbstractDataResponse implements SimplicateResponseInterface
{

    protected function setData($data)
    {
        $this->data = new Collection(
            array_map(
                function (array $item) {
                    return new Leave($item);
                },
                $data
            )
        );
    }

}
