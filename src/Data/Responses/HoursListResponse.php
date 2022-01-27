<?php

namespace CrixuAMG\Simplicate\Data\Responses;

use CrixuAMG\Simplicate\Contracts\Data\SimplicateResponseInterface;
use CrixuAMG\Simplicate\Data\Hours\Hours;
use Illuminate\Support\Collection;

/**
 * Class HoursListResponse
 *
 * @method Collection|Hours[] getData()
 */
class HoursListResponse extends AbstractDataResponse implements SimplicateResponseInterface
{

    protected function setData($data)
    {
        $this->data = new Collection(
            array_map(
                function (array $item) {
                    return new Hours($item);
                },
                $data
            )
        );
    }

}
