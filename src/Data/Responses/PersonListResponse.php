<?php

namespace CrixuAMG\Simplicate\Data\Responses;

use CrixuAMG\Simplicate\Contracts\Data\SimplicateResponseInterface;
use CrixuAMG\Simplicate\Data\Crm\Person;
use Illuminate\Support\Collection;

/**
 * Class PersonListResponse
 *
 * @method Collection|Person[] getData()
 */
class PersonListResponse extends AbstractDataResponse implements SimplicateResponseInterface
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
