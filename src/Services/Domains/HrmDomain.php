<?php

namespace CrixuAMG\Simplicate\Services\Domains;

use CrixuAMG\Simplicate\Contracts\Data\SimplicateResponseInterface;
use CrixuAMG\Simplicate\Contracts\Services\Domains\HrmDomainInterface;
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

class HrmDomain extends AbstractDomain implements HrmDomainInterface
{
    /**
     * @return string
     */
    public function path(): string
    {
        return 'hrm';
    }

    /**
     * @return SimplicateResponseInterface|EmployeeListResponse
     */
    public function allEmployees(): EmployeeListResponse
    {
        return $this->client->responseClass(EmployeeListResponse::class)
            ->get($this->prefixPath('employee'));
    }

    /**
     * @param  string  $id
     * @return SimplicateResponseInterface|EmployeeSingleResponse
     */
    public function employee(string $id): EmployeeSingleResponse
    {
        return $this->client->responseClass(EmployeeSingleResponse::class)
            ->get($this->prefixPath('employee/'.$id));
    }

    /**
     * @return SimplicateResponseInterface|EmployeeTypeListResponse
     */
    public function allEmployeeTypes(): EmployeeTypeListResponse
    {
        return $this->client->responseClass(EmployeeTypeListResponse::class)
            ->get($this->prefixPath('employeetype'));
    }

    /**
     * @param  string  $id
     * @return SimplicateResponseInterface|EmployeeTypeSingleResponse
     */
    public function employeeType(string $id): EmployeeTypeSingleResponse
    {
        return $this->client->responseClass(EmployeeTypeSingleResponse::class)
            ->get($this->prefixPath('employeetype/'.$id));
    }

    /**
     * @return SimplicateResponseInterface|EmploymentTypeListResponse
     */
    public function allEmploymentTypes(): EmploymentTypeListResponse
    {
        return $this->client->responseClass(EmploymentTypeListResponse::class)
            ->get($this->prefixPath('employmenttype'));
    }

    /**
     * @param  string  $id
     * @return SimplicateResponseInterface|EmploymentTypeSingleResponse
     */
    public function employmentType(string $id): EmploymentTypeSingleResponse
    {
        return $this->client->responseClass(EmploymentTypeSingleResponse::class)
            ->get($this->prefixPath('employmenttype/'.$id));
    }

    /**
     * @return SimplicateResponseInterface|LeaveListResponse
     */
    public function allLeave(): LeaveListResponse
    {
        return $this->client->responseClass(LeaveListResponse::class)
            ->get($this->prefixPath('leave'));
    }

    /**
     * @param  string  $id
     * @return SimplicateResponseInterface|LeaveSingleResponse
     */
    public function leave(string $id): LeaveSingleResponse
    {
        return $this->client->responseClass(LeaveSingleResponse::class)
            ->get($this->prefixPath('leave/'.$id));
    }

    /**
     * @return SimplicateResponseInterface|LeaveBalanceListResponse
     */
    public function leaveBalance(): LeaveBalanceListResponse
    {
        return $this->client->responseClass(LeaveBalanceListResponse::class)
            ->get($this->prefixPath('leavebalance'));
    }

    /**
     * @return SimplicateResponseInterface|LeaveTypeListResponse
     */
    public function allLeaveTypes(): LeaveTypeListResponse
    {
        return $this->client->responseClass(LeaveTypeListResponse::class)
            ->get($this->prefixPath('leavetype'));
    }

    /**
     * @param  string  $id
     * @return SimplicateResponseInterface|LeaveTypeSingleResponse
     */
    public function leaveType(string $id): LeaveTypeSingleResponse
    {
        return $this->client->responseClass(LeaveTypeSingleResponse::class)
            ->get($this->prefixPath('leavetype/'.$id));
    }

    /**
     * @return SimplicateResponseInterface|TeamListResponse
     */
    public function allTeams(): TeamListResponse
    {
        return $this->client->responseClass(TeamListResponse::class)
            ->get($this->prefixPath('team'));
    }

    /**
     * @param  string  $id
     * @return SimplicateResponseInterface|TeamSingleResponse
     */
    public function team(string $id): TeamSingleResponse
    {
        return $this->client->responseClass(TeamSingleResponse::class)
            ->get($this->prefixPath('team/'.$id));
    }

    /**
     * @return SimplicateResponseInterface|TimeTableListResponse
     */
    public function timeTables(): TimeTableListResponse
    {
        return $this->client->responseClass(TimeTableListResponse::class)
            ->get($this->prefixPath('timetable'));
    }
}
