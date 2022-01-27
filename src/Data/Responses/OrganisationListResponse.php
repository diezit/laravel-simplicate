<?php

namespace CrixuAMG\Simplicate\Data\Responses;

use CrixuAMG\Simplicate\Contracts\Data\SimplicateResponseInterface;
use CrixuAMG\Simplicate\Data\Crm\Organisation;
use Illuminate\Support\Collection;

/**
 * Class OrganisationListResponse
 *
 * @method Collection|Organisation[] getData()
 */
class OrganisationListResponse extends AbstractDataResponse implements SimplicateResponseInterface
{
    protected function setData($data)
    {
        $this->data = new Collection(
            array_map(
                fn(array $item) => new Organisation($item),
                $data
            )
        );
    }
}
