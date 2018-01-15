<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGroupNightForwardingGetResponse
 *
 * Response to UserGroupNightForwardingGetRequest.
 *         businessHours and holidaySchedule are returned in the response only when
 * groupNightForwarding is ‘Auto On’.
 */
class UserGroupNightForwardingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName nightForwarding
     * @var string|null
     */
    private $nightForwarding = null;

    /**
     * @ElementName groupNightForwarding
     * @var string|null
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
     * @return string|null
     */
    public function getNightForwarding()
    {
        return $this->nightForwarding;
    }

    /**
     * Setter for nightForwarding
     *
     * @ElementName nightForwarding
     * @param string|null $nightForwarding
     * @return $this
     */
    public function setNightForwarding($nightForwarding)
    {
        $this->nightForwarding = $nightForwarding;
        return $this;
    }

    /**
     * Getter for groupNightForwarding
     *
     * @ElementName groupNightForwarding
     * @return string|null
     */
    public function getGroupNightForwarding()
    {
        return $this->groupNightForwarding;
    }

    /**
     * Setter for groupNightForwarding
     *
     * @ElementName groupNightForwarding
     * @param string|null $groupNightForwarding
     * @return $this
     */
    public function setGroupNightForwarding($groupNightForwarding)
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
    public function setBusinessHours($businessHours)
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
    public function setHolidaySchedule($holidaySchedule)
    {
        $this->holidaySchedule = $holidaySchedule;
        return $this;
    }


}

