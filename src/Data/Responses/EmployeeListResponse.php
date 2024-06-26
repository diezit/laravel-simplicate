<?php

namespace CrixuAMG\Simplicate\Data\Responses;

use CrixuAMG\Simplicate\Contracts\Data\SimplicateResponseInterface;
use CrixuAMG\Simplicate\Data\Employee\Employee;
use Illuminate\Support\Collection;

/**
 * Class EmployeeListResponse
 *
 * @method Collection|Employee[] getData()
 */
class EmployeeListResponse extends AbstractDataResponse implements SimplicateResponseInterface
{

    protected function setData($data)
    {
        $this->data = new Collection(
            array_map(
                function (array $item) {
                    return new Employee($item);
                },
                $data
            )
        );
    }

}
