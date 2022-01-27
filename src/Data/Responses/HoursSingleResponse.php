<?php

namespace CrixuAMG\Simplicate\Data\Responses;

use CrixuAMG\Simplicate\Contracts\Data\SimplicateResponseInterface;
use CrixuAMG\Simplicate\Data\Hours\Hours;

/**
 * Class HoursSingleResponse
 *
 * @method Hours getData()
 */
class HoursSingleResponse extends AbstractDataResponse implements SimplicateResponseInterface
{

    protected function setData($data)
    {
        $this->data = new Hours($data);
    }

}
