<?php

namespace CrixuAMG\Simplicate\Data\Responses;

use CrixuAMG\Simplicate\Contracts\Data\SimplicateResponseInterface;
use CrixuAMG\Simplicate\Data\Hours\Approval;

class ApprovalsSingleResponse extends AbstractDataResponse implements SimplicateResponseInterface
{
    protected function setData($data)
    {
        $this->data = new Approval($data);
    }
}