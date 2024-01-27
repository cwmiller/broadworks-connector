<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCommunicationBarringHierarchicalRedirectingRule
 *
 * Service Provider Communication Barring Hierarchical Redirecting Rule
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:4954","type":"sequence","children":[{"id":"6337d0cfba4de1c83587203c5b0bae54:4955","type":"choice"}]}]
 */
class ServiceProviderCommunicationBarringHierarchicalRedirectingRule
{
    /**
     * @ElementName criteria
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4955
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $criteria = null;

    /**
     * @ElementName digitPatternCriteria
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4955
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $digitPatternCriteria = null;

    /**
     * @ElementName action
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingAction
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4954
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingAction|null
     */
    protected $action = null;

    /**
     * @ElementName callTimeoutSeconds
     * @Type int
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4954
     * @MinInclusive 60
     * @MaxInclusive 86400
     * @var int|null
     */
    protected $callTimeoutSeconds = null;

    /**
     * @ElementName timeSchedule
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4954
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $timeSchedule = null;

    /**
     * @ElementName holidaySchedule
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4954
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $holidaySchedule = null;

    /**
     * @ElementName priority
     * @Type float
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4954
     * @MinInclusive 0.0
     * @MaxInclusive 1000000.0
     * @var float|null
     */
    protected $priority = null;

    /**
     * Getter for criteria
     *
     * @return string
     */
    public function getCriteria()
    {
        return $this->criteria instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->criteria;
    }

    /**
     * Setter for criteria
     *
     * @param string $criteria
     * @return $this
     */
    public function setCriteria($criteria)
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCriteria()
    {
        $this->criteria = null;
        return $this;
    }

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
     * Getter for action
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingAction
     */
    public function getAction()
    {
        return $this->action instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->action;
    }

    /**
     * Setter for action
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingAction $action
     * @return $this
     */
    public function setAction(\CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringRedirectingAction $action)
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

