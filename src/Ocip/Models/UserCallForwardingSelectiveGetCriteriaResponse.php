<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallForwardingSelectiveGetCriteriaResponse
 *
 * Response to the UserCallForwardingSelectiveGetCriteriaRequest.
 *
 * @see UserCallForwardingSelectiveGetCriteriaRequest
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:40705","type":"sequence"}]
 */
class UserCallForwardingSelectiveGetCriteriaResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName timeSchedule
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40705
     * @var \CWM\BroadWorksConnector\Ocip\Models\TimeSchedule|null
     */
    protected $timeSchedule = null;

    /**
     * @ElementName forwardToNumberSelection
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallForwardingSelectiveNumberSelection
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40705
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallForwardingSelectiveNumberSelection|null
     */
    protected $forwardToNumberSelection = null;

    /**
     * @ElementName forwardToPhoneNumber
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40705
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $forwardToPhoneNumber = null;

    /**
     * @ElementName fromDnCriteria
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CriteriaFromDn
     * @Group ab0042aa512abc10edb3c55e4b416b0b:40705
     * @var \CWM\BroadWorksConnector\Ocip\Models\CriteriaFromDn|null
     */
    protected $fromDnCriteria = null;

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
     * Getter for forwardToNumberSelection
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallForwardingSelectiveNumberSelection
     */
    public function getForwardToNumberSelection()
    {
        return $this->forwardToNumberSelection instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forwardToNumberSelection;
    }

    /**
     * Setter for forwardToNumberSelection
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallForwardingSelectiveNumberSelection $forwardToNumberSelection
     * @return $this
     */
    public function setForwardToNumberSelection(\CWM\BroadWorksConnector\Ocip\Models\CallForwardingSelectiveNumberSelection $forwardToNumberSelection)
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

