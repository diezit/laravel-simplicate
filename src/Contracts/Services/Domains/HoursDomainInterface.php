<?php

namespace CrixuAMG\Simplicate\Contracts\Services\Domains;

use CrixuAMG\Simplicate\Contracts\Services\SimplicateDomainInterface;
use CrixuAMG\Simplicate\Data\Responses\ApprovalsListResponse;
use CrixuAMG\Simplicate\Data\Responses\ApprovalsSingleResponse;
use CrixuAMG\Simplicate\Data\Responses\HoursListResponse;
use CrixuAMG\Simplicate\Data\Responses\HoursSingleResponse;
use CrixuAMG\Simplicate\Data\Responses\HoursTypeListResponse;
use CrixuAMG\Simplicate\Data\Responses\HoursTypeSingleResponse;

interface HoursDomainInterface extends SimplicateDomainInterface
{

    public function allHours(): HoursListResponse;

    public function hours(string $id): HoursSingleResponse;

    public function allHoursTypes(): HoursTypeListResponse;

    public function hoursType(string $id): HoursTypeSingleResponse;

    public function allApprovals(): ApprovalsListResponse;

    public function approval(string $id): ApprovalsSingleResponse;

}
