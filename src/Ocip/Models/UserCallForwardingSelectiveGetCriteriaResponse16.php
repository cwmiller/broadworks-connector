<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallForwardingSelectiveGetCriteriaResponse16
 *
 * Response to the UserCallForwardingSelectiveGetCriteriaRequest16.
 *         Replaced by: UserCallForwardingSelectiveGetCriteriaResponse21 in AS data mode
 *
 * @see UserCallForwardingSelectiveGetCriteriaRequest16
 * @see UserCallForwardingSelectiveGetCriteriaResponse21
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:3437","type":"sequence"}]
 */
class UserCallForwardingSelectiveGetCriteriaResponse16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName timeSchedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:3437
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null
     */
    private $timeSchedule = null;

    /**
     * @ElementName holidaySchedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:3437
     * @var \CWM\BroadWorksConnector\Ocip\Models\HolidaySchedule|null
     */
    private $holidaySchedule = null;

    /**
     * @ElementName forwardToNumberSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallForwardingSelectiveNumberSelection16
     * @Group de4d76f01f337fe4694212ec9f771753:3437
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallForwardingSelectiveNumberSelection16|null
     */
    private $forwardToNumberSelection = null;

    /**
     * @ElementName forwardToPhoneNumber
     * @Type string
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:3437
     * @var string|null
     */
    private $forwardToPhoneNumber = null;

    /**
     * @ElementName fromDnCriteria
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CriteriaFromDn
     * @Group de4d76f01f337fe4694212ec9f771753:3437
     * @var \CWM\BroadWorksConnector\Ocip\Models\CriteriaFromDn|null
     */
    private $fromDnCriteria = null;

    /**
     * Getter for timeSchedule
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule
     */
    public function getTimeSchedule()
    {
        return $this->timeSchedule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeSchedule;
    }

    /**
     * Setter for timeSchedule
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule $timeSchedule
     * @return $this
     */
    public function setTimeSchedule(\CWM\BroadWorksConnector\Ocip\Models\TimeSchedule $timeSchedule)
    {
        $this->timeSchedule = $timeSchedule;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeSchedule()
    {
        $this->timeSchedule = null;
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

    /**
     * Getter for forwardToNumberSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallForwardingSelectiveNumberSelection16
     */
    public function getForwardToNumberSelection()
    {
        return $this->forwardToNumberSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forwardToNumberSelection;
    }

    /**
     * Setter for forwardToNumberSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallForwardingSelectiveNumberSelection16 $forwardToNumberSelection
     * @return $this
     */
    public function setForwardToNumberSelection(\CWM\BroadWorksConnector\Ocip\Models\CallForwardingSelectiveNumberSelection16 $forwardToNumberSelection)
    {
        $this->forwardToNumberSelection = $forwardToNumberSelection;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForwardToNumberSelection()
    {
        $this->forwardToNumberSelection = null;
        return $this;
    }

    /**
     * Getter for forwardToPhoneNumber
     *
     * @return string
     */
    public function getForwardToPhoneNumber()
    {
        return $this->forwardToPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forwardToPhoneNumber;
    }

    /**
     * Setter for forwardToPhoneNumber
     *
     * @param string $forwardToPhoneNumber
     * @return $this
     */
    public function setForwardToPhoneNumber($forwardToPhoneNumber)
    {
        $this->forwardToPhoneNumber = $forwardToPhoneNumber;
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

    /**
     * Getter for fromDnCriteria
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CriteriaFromDn
     */
    public function getFromDnCriteria()
    {
        return $this->fromDnCriteria instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fromDnCriteria;
    }

    /**
     * Setter for fromDnCriteria
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CriteriaFromDn $fromDnCriteria
     * @return $this
     */
    public function setFromDnCriteria(\CWM\BroadWorksConnector\Ocip\Models\CriteriaFromDn $fromDnCriteria)
    {
        $this->fromDnCriteria = $fromDnCriteria;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFromDnCriteria()
    {
        $this->fromDnCriteria = null;
        return $this;
    }


}

