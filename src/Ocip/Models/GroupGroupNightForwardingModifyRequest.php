<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupGroupNightForwardingModifyRequest
 *
 * Request to modify the Group Night Forwarding group parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"65f35694d7d3354987bf6387ab55bfc6:82","type":"sequence"}]
 */
class GroupGroupNightForwardingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 65f35694d7d3354987bf6387ab55bfc6:82
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 65f35694d7d3354987bf6387ab55bfc6:82
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName nightForwarding
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupNightForwardingGroupServiceActivationMode
     * @Optional
     * @Group 65f35694d7d3354987bf6387ab55bfc6:82
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupNightForwardingGroupServiceActivationMode|null
     */
    protected $nightForwarding = null;

    /**
     * @ElementName businessHours
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule
     * @Nillable
     * @Optional
     * @Group 65f35694d7d3354987bf6387ab55bfc6:82
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $businessHours = null;

    /**
     * @ElementName holidaySchedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule
     * @Nillable
     * @Optional
     * @Group 65f35694d7d3354987bf6387ab55bfc6:82
     * @var \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $holidaySchedule = null;

    /**
     * @ElementName forwardToPhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group 65f35694d7d3354987bf6387ab55bfc6:82
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $forwardToPhoneNumber = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

    /**
     * Getter for nightForwarding
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupNightForwardingGroupServiceActivationMode
     */
    public function getNightForwarding()
    {
        return $this->nightForwarding instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->nightForwarding;
    }

    /**
     * Setter for nightForwarding
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupNightForwardingGroupServiceActivationMode $nightForwarding
     * @return $this
     */
    public function setNightForwarding(\CWM\BroadWorksConnector\Ocip\Models\GroupNightForwardingGroupServiceActivationMode $nightForwarding)
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
     * Getter for businessHours
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null
     */
    public function getBusinessHours()
    {
        return $this->businessHours instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->businessHours;
    }

    /**
     * Setter for businessHours
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null $businessHours
     * @return $this
     */
    public function setBusinessHours(\CWM\BroadWorksConnector\Ocip\Models\TimeSchedule $businessHours = null)
    {
        if ($businessHours === null) {
            $this->businessHours = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->businessHours = $businessHours;
        }
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule|null
     */
    public function getHolidaySchedule()
    {
        return $this->holidaySchedule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holidaySchedule;
    }

    /**
     * Setter for holidaySchedule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule|null $holidaySchedule
     * @return $this
     */
    public function setHolidaySchedule(\CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule $holidaySchedule = null)
    {
        if ($holidaySchedule === null) {
            $this->holidaySchedule = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->holidaySchedule = $holidaySchedule;
        }
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

    /**
     * Getter for forwardToPhoneNumber
     *
     * @return string|null
     */
    public function getForwardToPhoneNumber()
    {
        return $this->forwardToPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forwardToPhoneNumber;
    }

    /**
     * Setter for forwardToPhoneNumber
     *
     * @param string|null $forwardToPhoneNumber
     * @return $this
     */
    public function setForwardToPhoneNumber($forwardToPhoneNumber = null)
    {
        if ($forwardToPhoneNumber === null) {
            $this->forwardToPhoneNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->forwardToPhoneNumber = $forwardToPhoneNumber;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForwardToPhoneNumber()
    {
        $this->forwardToPhoneNumber = null;
        return $this;
    }
}

