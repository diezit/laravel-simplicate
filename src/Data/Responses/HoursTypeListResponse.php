<?php

namespace CrixuAMG\Simplicate\Data\Responses;

use CrixuAMG\Simplicate\Contracts\Data\SimplicateResponseInterface;
use CrixuAMG\Simplicate\Data\Hours\Type;
use Illuminate\Support\Collection;

/**
 * Class HoursTypeListResponse
 *
 * @method Collection|Type[] getData()
 */
class HoursTypeListResponse extends AbstractDataResponse implements SimplicateResponseInterface
{

    protected function setData($data)
    {
        $this->data = new Collection(
            array_map(
                function (array $item) {
                    return new Type($item);
                },
                $data
            )
        );
    }

}
