<?php

namespace CrixuAMG\Simplicate\Data\Responses;

use CrixuAMG\Simplicate\Data\Hours\Approval;
use Illuminate\Support\Collection;

class ApprovalsListResponse
{
    protected function setData($data)
    {
        $this->data = new Collection(
            array_map(
                function (array $item) {
                    return new Approval($item);
                },
                $data
            )
        );
    }
}