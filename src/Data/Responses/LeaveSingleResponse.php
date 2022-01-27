<?php

namespace CrixuAMG\Simplicate\Data\Responses;

use CrixuAMG\Simplicate\Contracts\Data\SimplicateResponseInterface;
use CrixuAMG\Simplicate\Data\Leave\Leave;

/**
 * Class LeaveSingleResponse
 *
 * @method Leave getData()
 */
class LeaveSingleResponse extends AbstractDataResponse implements SimplicateResponseInterface
{

    protected function setData($data)
    {
        $this->data = new Leave($data);
    }

}
