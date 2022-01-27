<?php

namespace CrixuAMG\Simplicate\Data\Responses;

use CrixuAMG\Simplicate\Contracts\Data\SimplicateResponseInterface;
use CrixuAMG\Simplicate\Data\Hours\Type;

/**
 * Class HoursTypeSingleResponse
 *
 * @method Type getData()
 */
class HoursTypeSingleResponse extends AbstractDataResponse implements SimplicateResponseInterface
{

    protected function setData($data)
    {
        $this->data = new Type($data);
    }

}
