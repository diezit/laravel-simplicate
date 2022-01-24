<?php

namespace CrixuAMG\Simplicate\Data\Responses;

use CrixuAMG\Simplicate\Data\Employee\EmploymentType;
use Illuminate\Support\Collection;

/**
 * Class EmploymentTypeListResponse
 *
 * @method Collection|EmploymentType[] getData()
 */
class EmploymentTypeListResponse extends AbstractDataResponse
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
