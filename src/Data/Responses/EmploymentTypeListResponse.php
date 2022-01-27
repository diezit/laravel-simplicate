<?php

namespace CrixuAMG\Simplicate\Data\Responses;

use CrixuAMG\Simplicate\Contracts\Data\SimplicateResponseInterface;
use CrixuAMG\Simplicate\Data\Employee\EmploymentType;
use Illuminate\Support\Collection;

/**
 * Class EmploymentTypeListResponse
 *
 * @method Collection|EmploymentType[] getData()
 */
class EmploymentTypeListResponse extends AbstractDataResponse implements SimplicateResponseInterface
{

    protected function setData($data)
    {
        $this->data = new Collection(
            array_map(
                function (array $item) {
                    return new EmploymentType($item);
                },
                $data
            )
        );
    }

}
