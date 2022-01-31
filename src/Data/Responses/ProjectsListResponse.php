<?php

namespace CrixuAMG\Simplicate\Data\Responses;

use CrixuAMG\Simplicate\Contracts\Data\SimplicateResponseInterface;
use CrixuAMG\Simplicate\Data\Project\Project;
use Illuminate\Support\Collection;

/**
 * Class ProjectListResponse
 *
 * @method Collection|Project[] getData()
 */
class ProjectsListResponse extends AbstractDataResponse implements SimplicateResponseInterface
{
    protected function setData($data)
    {
        $this->data = new Collection(
            array_map(
                function (array $item) {
                    return new Project($item);
                },
                $data
            )
        );
    }
}
