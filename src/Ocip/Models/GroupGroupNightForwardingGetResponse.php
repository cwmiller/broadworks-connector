<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGroupNightForwardingGetResponse
 *
 * Response to GroupGroupNightForwardingGetRequest.
 */
class GroupGroupNightForwardingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName nightForwarding
     * @var string|null
     */
    private $nightForwarding = null;

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
     * @ElementName forwardToPhoneNumber
     * @var string|null
     */
    private $forwardToPhoneNumber = null;

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

    /**
     * Getter for forwardToPhoneNumber
     *
     * @ElementName forwardToPhoneNumber
     * @return string|null
     */
    public function getForwardToPhoneNumber()
    {
        return $this->forwardToPhoneNumber;
    }

    /**
     * Setter for forwardToPhoneNumber
     *
     * @ElementName forwardToPhoneNumber
     * @param string|null $forwardToPhoneNumber
     * @return $this
     */
    public function setForwardToPhoneNumber($forwardToPhoneNumber)
    {
        $this->forwardToPhoneNumber = $forwardToPhoneNumber;
        return $this;
    }


}

