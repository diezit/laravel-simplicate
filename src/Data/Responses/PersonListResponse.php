<?php

namespace CrixuAMG\Simplicate\Data\Responses;

use CrixuAMG\Simplicate\Data\Employee\Person;
use Illuminate\Support\Collection;

/**
 * Class PersonListResponse
 *
 * @method Collection|Person[] getData()
 */
class PersonListResponse extends AbstractDataResponse
{
    protected function setData($data)
    {
        $this->data = new Collection(
            array_map(
                function (array $item) {
                    return new Person($item);
                },
                $data
            )
        );
    }
}
