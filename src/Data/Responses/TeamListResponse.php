<?php

namespace CrixuAMG\Simplicate\Data\Responses;

use CrixuAMG\Simplicate\Contracts\Data\SimplicateResponseInterface;
use CrixuAMG\Simplicate\Data\Employee\Team;
use Illuminate\Support\Collection;

/**
 * Class TeamListResponse
 *
 * @method Collection|Team[] getData()
 */
class TeamListResponse extends AbstractDataResponse implements SimplicateResponseInterface
{

    protected function setData($data)
    {
        $this->data = new Collection(
            array_map(
                function (array $item) {
                    return new Team($item);
                },
                $data
            )
        );
    }

}
