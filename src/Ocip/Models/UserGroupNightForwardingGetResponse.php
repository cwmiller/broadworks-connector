<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGroupNightForwardingGetResponse
 *
 * Response to UserGroupNightForwardingGetRequest.
 *         businessHours and holidaySchedule are returned in the response only when
 * groupNightForwarding is ‘Auto On’.
 *
 * @see UserGroupNightForwardingGetRequest
 */
class UserGroupNightForwardingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName nightForwarding
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupNightForwardingUserServiceActivationMode|null
     */
    private $nightForwarding = null;

    /**
     * @ElementName groupNightForwarding
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupNightForwardingGroupServiceActivationMode|null
     */
    private $groupNightForwarding = null;

    /**
     * @ElementName businessHours
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null
     */
    private $businessHours = null;

    /**
     * @ElementName holidaySchedule
     * @var \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule|null
     */
    private $holidaySchedule = null;

    /**
     * Getter for nightForwarding
     *
     * @ElementName nightForwarding
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupNightForwardingUserServiceActivationMode|null
     */
    public function getNightForwarding()
    {
        return $this->nightForwarding;
    }

    /**
     * Setter for nightForwarding
     *
     * @ElementName nightForwarding
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupNightForwardingUserServiceActivationMode|null $nightForwarding
     * @return $this
     */
    public function setNightForwarding(\CWM\BroadWorksConnector\Ocip\Models\GroupNightForwardingUserServiceActivationMode $nightForwarding)
    {
        $this->nightForwarding = $nightForwarding;
        return $this;
    }

    /**
     * Getter for groupNightForwarding
     *
     * @ElementName groupNightForwarding
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupNightForwardingGroupServiceActivationMode|null
     */
    public function getGroupNightForwarding()
    {
        return $this->groupNightForwarding;
    }

    /**
     * Setter for groupNightForwarding
     *
     * @ElementName groupNightForwarding
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupNightForwardingGroupServiceActivationMode|null $groupNightForwarding
     * @return $this
     */
    public function setGroupNightForwarding(\CWM\BroadWorksConnector\Ocip\Models\GroupNightForwardingGroupServiceActivationMode $groupNightForwarding)
    {
        $this->groupNightForwarding = $groupNightForwarding;
        return $this;
    }

    /**
     * Getter for businessHours
     *
     * @ElementName businessHours
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null
     */
    public function getBusinessHours()
    {
        return $this->businessHours;
    }

    /**
     * Setter for businessHours
     *
     * @ElementName businessHours
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null $businessHours
     * @return $this
     */
    public function setBusinessHours(\CWM\BroadWorksConnector\Ocip\Models\TimeSchedule $businessHours)
    {
        $this->businessHours = $businessHours;
        return $this;
    }

    /**
     * Getter for holidaySchedule
     *
     * @ElementName holidaySchedule
     * @return \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule|null
     */
    public function getHolidaySchedule()
    {
        return $this->holidaySchedule;
    }

    /**
     * Setter for holidaySchedule
     *
     * @ElementName holidaySchedule
     * @param \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule|null $holidaySchedule
     * @return $this
     */
    public function setHolidaySchedule(\CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule $holidaySchedule)
    {
        $this->holidaySchedule = $holidaySchedule;
        return $this;
    }


}

