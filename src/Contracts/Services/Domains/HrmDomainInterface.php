<?php

namespace CrixuAMG\Simplicate\Contracts\Services\Domains;

use CrixuAMG\Simplicate\Contracts\Services\SimplicateDomainInterface;
use CrixuAMG\Simplicate\Data\Responses\EmployeeListResponse;
use CrixuAMG\Simplicate\Data\Responses\EmployeeSingleResponse;
use CrixuAMG\Simplicate\Data\Responses\EmployeeTypeListResponse;
use CrixuAMG\Simplicate\Data\Responses\EmployeeTypeSingleResponse;
use CrixuAMG\Simplicate\Data\Responses\EmploymentTypeListResponse;
use CrixuAMG\Simplicate\Data\Responses\EmploymentTypeSingleResponse;
use CrixuAMG\Simplicate\Data\Responses\LeaveBalanceListResponse;
use CrixuAMG\Simplicate\Data\Responses\LeaveListResponse;
use CrixuAMG\Simplicate\Data\Responses\LeaveSingleResponse;
use CrixuAMG\Simplicate\Data\Responses\LeaveTypeListResponse;
use CrixuAMG\Simplicate\Data\Responses\LeaveTypeSingleResponse;
use CrixuAMG\Simplicate\Data\Responses\TeamListResponse;
use CrixuAMG\Simplicate\Data\Responses\TeamSingleResponse;
use CrixuAMG\Simplicate\Data\Responses\TimeTableListResponse;

interface HrmDomainInterface extends SimplicateDomainInterface
{

    public function allEmployees(): EmployeeListResponse;

    public function employee(string $id): EmployeeSingleResponse;

    public function allEmployeeTypes(): EmployeeTypeListResponse;

    public function employeeType(string $id): EmployeeTypeSingleResponse;

    public function allEmploymentTypes(): EmploymentTypeListResponse;

    public function employmentType(string $id): EmploymentTypeSingleResponse;

    public function allLeave(): LeaveListResponse;

    public function leave(string $id): LeaveSingleResponse;

    public function leaveBalance(): LeaveBalanceListResponse;

    public function allLeaveTypes(): LeaveTypeListResponse;

    public function leaveType(string $id): LeaveTypeSingleResponse;

    public function allTeams(): TeamListResponse;

    public function team(string $id): TeamSingleResponse;

    public function timeTables(): TimeTableListResponse;

}
