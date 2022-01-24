<?php

namespace CrixuAMG\Simplicate\Data\Responses;

use CrixuAMG\Simplicate\Data\Employee\Type;
use Illuminate\Support\Collection;

/**
 * Class EmployeeTypeListResponse
 *
 * @method Collection|Type()[] getData()
 */
class EmployeeTypeListResponse extends AbstractDataResponse
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
