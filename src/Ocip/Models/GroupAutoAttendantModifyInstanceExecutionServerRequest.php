<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAutoAttendantModifyInstanceExecutionServerRequest
 *
 * Request to modify an Auto Attendant instance.
 *         Only Group and Enterprise level schedules are accepted.
 *         The response is either SuccessResponse or ErrorResponse.
 *         Engineering Note: This command can only be executed from the Execution Server
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"0b10bca40a55275de6ba2076c583b7fd:46","type":"sequence"}]
 */
class GroupAutoAttendantModifyInstanceExecutionServerRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 0b10bca40a55275de6ba2076c583b7fd:46
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * @ElementName businessHoursMenu
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenuExecutionServer
     * @Optional
     * @Group 0b10bca40a55275de6ba2076c583b7fd:46
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenuExecutionServer|null
     */
    protected $businessHoursMenu = null;

    /**
     * @ElementName afterHoursMenu
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenuExecutionServer
     * @Optional
     * @Group 0b10bca40a55275de6ba2076c583b7fd:46
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenuExecutionServer|null
     */
    protected $afterHoursMenu = null;

    /**
     * @ElementName holidayMenu
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenuExecutionServer
     * @Optional
     * @Group 0b10bca40a55275de6ba2076c583b7fd:46
     * @var \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenuExecutionServer|null
     */
    protected $holidayMenu = null;

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }

    /**
     * Getter for businessHoursMenu
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenuExecutionServer
     */
    public function getBusinessHoursMenu()
    {
        return $this->businessHoursMenu instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->businessHoursMenu;
    }

    /**
     * Setter for businessHoursMenu
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenuExecutionServer $businessHoursMenu
     * @return $this
     */
    public function setBusinessHoursMenu(\CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenuExecutionServer $businessHoursMenu)
    {
        $this->businessHoursMenu = $businessHoursMenu;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBusinessHoursMenu()
    {
        $this->businessHoursMenu = null;
        return $this;
    }

    /**
     * Getter for afterHoursMenu
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenuExecutionServer
     */
    public function getAfterHoursMenu()
    {
        return $this->afterHoursMenu instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->afterHoursMenu;
    }

    /**
     * Setter for afterHoursMenu
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenuExecutionServer $afterHoursMenu
     * @return $this
     */
    public function setAfterHoursMenu(\CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenuExecutionServer $afterHoursMenu)
    {
        $this->afterHoursMenu = $afterHoursMenu;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAfterHoursMenu()
    {
        $this->afterHoursMenu = null;
        return $this;
    }

    /**
     * Getter for holidayMenu
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenuExecutionServer
     */
    public function getHolidayMenu()
    {
        return $this->holidayMenu instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holidayMenu;
    }

    /**
     * Setter for holidayMenu
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenuExecutionServer $holidayMenu
     * @return $this
     */
    public function setHolidayMenu(\CWM\BroadWorksConnector\Ocip\Models\AutoAttendantModifyMenuExecutionServer $holidayMenu)
    {
        $this->holidayMenu = $holidayMenu;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHolidayMenu()
    {
        $this->holidayMenu = null;
        return $this;
    }
}

