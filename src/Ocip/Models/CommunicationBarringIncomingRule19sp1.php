<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommunicationBarringIncomingRule19sp1
 *
 * Communication Barring Incoming Rule
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:1468","type":"sequence","children":[{"id":"c0d21ef9ba207c335d8347e5172fce1d:1469","type":"choice"}]}]
 */
class CommunicationBarringIncomingRule19sp1
{

    /**
     * @ElementName digitPatternCriteria
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:1469
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $digitPatternCriteria = null;

    /**
     * @ElementName incomingCriteria
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:1469
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $incomingCriteria = null;

    /**
     * @ElementName action
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingAction
     * @Group c0d21ef9ba207c335d8347e5172fce1d:1468
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingAction|null
     */
    private $action = null;

    /**
     * @ElementName callTimeoutSeconds
     * @Type int
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:1468
     * @MinInclusive 60
     * @MaxInclusive 86400
     * @var int|null
     */
    private $callTimeoutSeconds = null;

    /**
     * @ElementName timeSchedule
     * @Type string
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:1468
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $timeSchedule = null;

    /**
     * @ElementName holidaySchedule
     * @Type string
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:1468
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $holidaySchedule = null;

    /**
     * @ElementName priority
     * @Type float
     * @Group c0d21ef9ba207c335d8347e5172fce1d:1468
     * @MinInclusive 0.0
     * @MaxInclusive 1000000.0
     * @var float|null
     */
    private $priority = null;

    /**
     * Getter for digitPatternCriteria
     *
     * @return string
     */
    public function getDigitPatternCriteria()
    {
        return $this->digitPatternCriteria instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->digitPatternCriteria;
    }

    /**
     * Setter for digitPatternCriteria
     *
     * @param string $digitPatternCriteria
     * @return $this
     */
    public function setDigitPatternCriteria($digitPatternCriteria)
    {
        $this->digitPatternCriteria = $digitPatternCriteria;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDigitPatternCriteria()
    {
        $this->digitPatternCriteria = null;
        return $this;
    }

    /**
     * Getter for incomingCriteria
     *
     * @return string
     */
    public function getIncomingCriteria()
    {
        return $this->incomingCriteria instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->incomingCriteria;
    }

    /**
     * Setter for incomingCriteria
     *
     * @param string $incomingCriteria
     * @return $this
     */
    public function setIncomingCriteria($incomingCriteria)
    {
        $this->incomingCriteria = $incomingCriteria;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncomingCriteria()
    {
        $this->incomingCriteria = null;
        return $this;
    }

    /**
     * Getter for action
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingAction
     */
    public function getAction()
    {
        return $this->action instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->action;
    }

    /**
     * Setter for action
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingAction $action
     * @return $this
     */
    public function setAction(\CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringIncomingAction $action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAction()
    {
        $this->action = null;
        return $this;
    }

    /**
     * Getter for callTimeoutSeconds
     *
     * @return int
     */
    public function getCallTimeoutSeconds()
    {
        return $this->callTimeoutSeconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callTimeoutSeconds;
    }

    /**
     * Setter for callTimeoutSeconds
     *
     * @param int $callTimeoutSeconds
     * @return $this
     */
    public function setCallTimeoutSeconds($callTimeoutSeconds)
    {
        $this->callTimeoutSeconds = $callTimeoutSeconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallTimeoutSeconds()
    {
        $this->callTimeoutSeconds = null;
        return $this;
    }

    /**
     * Getter for timeSchedule
     *
     * @return string
     */
    public function getTimeSchedule()
    {
        return $this->timeSchedule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeSchedule;
    }

    /**
     * Setter for timeSchedule
     *
     * @param string $timeSchedule
     * @return $this
     */
    public function setTimeSchedule($timeSchedule)
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
     * @return string
     */
    public function getHolidaySchedule()
    {
        return $this->holidaySchedule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holidaySchedule;
    }

    /**
     * Setter for holidaySchedule
     *
     * @param string $holidaySchedule
     * @return $this
     */
    public function setHolidaySchedule($holidaySchedule)
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
     * Getter for priority
     *
     * @return float
     */
    public function getPriority()
    {
        return $this->priority instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->priority;
    }

    /**
     * Setter for priority
     *
     * @param float $priority
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPriority()
    {
        $this->priority = null;
        return $this;
    }


}

