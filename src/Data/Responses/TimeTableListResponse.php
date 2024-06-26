<?php

namespace CrixuAMG\Simplicate\Data\Responses;

use CrixuAMG\Simplicate\Contracts\Data\SimplicateResponseInterface;
use CrixuAMG\Simplicate\Data\TimeTable\TimeTable;
use Illuminate\Support\Collection;

/**
 * Class TimeTableListResponse
 *
 * @method Collection|TimeTable[] getData()
 */
class TimeTableListResponse extends AbstractDataResponse implements SimplicateResponseInterface
{

    protected function setData($data)
    {
        $this->data = new Collection(
            array_map(
                function (array $item) {
                    return new TimeTable($item);
                },
                $data
            )
        );
    }

}
