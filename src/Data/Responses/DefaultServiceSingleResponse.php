<?php

namespace CrixuAMG\Simplicate\Data\Responses;

use CrixuAMG\Simplicate\Data\Service\DefaultService;
use CrixuAMG\Simplicate\Contracts\Data\SimplicateResponseInterface;

/**
 * Class ServiceSingleResponse
 *
 * @method Service() getData()
 */
class DefaultServiceSingleResponse extends AbstractDataResponse implements SimplicateResponseInterface
{

    protected function setData($data)
    {
        $this->data = new DefaultService($data);
    }

}
