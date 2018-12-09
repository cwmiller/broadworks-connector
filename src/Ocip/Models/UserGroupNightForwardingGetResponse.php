<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGroupNightForwardingGetResponse
 *
 * Response to UserGroupNightForwardingGetRequest.
 *         businessHours and holidaySchedule are returned in the response only when groupNightForwarding is ‘Auto On’.
 *
 * @see UserGroupNightForwardingGetRequest
 * @Groups [{"id":"7aa3724e3d252a8e4882cf2fcd9d3961:164","type":"sequence"}]
 */
class UserGroupNightForwardingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName nightForwarding
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupNightForwardingUserServiceActivationMode
     * @Group 7aa3724e3d252a8e4882cf2fcd9d3961:164
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupNightForwardingUserServiceActivationMode|null
     */
    private $nightForwarding = null;

    /**
     * @ElementName groupNightForwarding
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupNightForwardingGroupServiceActivationMode
     * @Group 7aa3724e3d252a8e4882cf2fcd9d3961:164
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupNightForwardingGroupServiceActivationMode|null
     */
    private $groupNightForwarding = null;

    /**
     * @ElementName businessHours
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule
     * @Optional
     * @Group 7aa3724e3d252a8e4882cf2fcd9d3961:164
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null
     */
    private $businessHours = null;

    /**
     * @ElementName holidaySchedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule
     * @Optional
     * @Group 7aa3724e3d252a8e4882cf2fcd9d3961:164
     * @var \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule|null
     */
    private $holidaySchedule = null;

    /**
     * Getter for nightForwarding
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupNightForwardingUserServiceActivationMode
     */
    public function getNightForwarding()
    {
        return $this->nightForwarding instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->nightForwarding;
    }

    /**
     * Setter for nightForwarding
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupNightForwardingUserServiceActivationMode $nightForwarding
     * @return $this
     */
    public function setNightForwarding(\CWM\BroadWorksConnector\Ocip\Models\GroupNightForwardingUserServiceActivationMode $nightForwarding)
    {
        $this->nightForwarding = $nightForwarding;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNightForwarding()
    {
        $this->nightForwarding = null;
        return $this;
    }

    /**
     * Getter for groupNightForwarding
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupNightForwardingGroupServiceActivationMode
     */
    public function getGroupNightForwarding()
    {
        return $this->groupNightForwarding instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupNightForwarding;
    }

    /**
     * Setter for groupNightForwarding
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupNightForwardingGroupServiceActivationMode $groupNightForwarding
     * @return $this
     */
    public function setGroupNightForwarding(\CWM\BroadWorksConnector\Ocip\Models\GroupNightForwardingGroupServiceActivationMode $groupNightForwarding)
    {
        $this->groupNightForwarding = $groupNightForwarding;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupNightForwarding()
    {
        $this->groupNightForwarding = null;
        return $this;
    }

    /**
     * Getter for businessHours
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule
     */
    public function getBusinessHours()
    {
        return $this->businessHours instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->businessHours;
    }

    /**
     * Setter for businessHours
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule $businessHours
     * @return $this
     */
    public function setBusinessHours(\CWM\BroadWorksConnector\Ocip\Models\TimeSchedule $businessHours)
    {
        $this->businessHours = $businessHours;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBusinessHours()
    {
        $this->businessHours = null;
        return $this;
    }

    /**
     * Getter for holidaySchedule
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule
     */
    public function getHolidaySchedule()
    {
        return $this->holidaySchedule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holidaySchedule;
    }

    /**
     * Setter for holidaySchedule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule $holidaySchedule
     * @return $this
     */
    public function setHolidaySchedule(\CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule $holidaySchedule)
    {
        $this->holidaySchedule = $holidaySchedule;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHolidaySchedule()
    {
        $this->holidaySchedule = null;
        return $this;
    }


}

