<?php

namespace CrixuAMG\Simplicate\Data\Responses;

use CrixuAMG\Simplicate\Contracts\Data\SimplicateResponseInterface;
use CrixuAMG\Simplicate\Data\Project\Service;
use Illuminate\Support\Collection;

/**
 * Class ServicesListResponse
 *
 * @method Collection|Service[] getData()
 */
class ServicesListResponse extends AbstractDataResponse implements SimplicateResponseInterface
{

    protected function setData($data)
    {
        $this->data = new Collection(
            array_map(
                function (array $item) {
                    return new Service($item);
                },
                $data
            )
        );
    }

}
