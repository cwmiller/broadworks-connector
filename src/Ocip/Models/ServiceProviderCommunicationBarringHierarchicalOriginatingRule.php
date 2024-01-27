<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCommunicationBarringHierarchicalOriginatingRule
 *
 * Service Provider Communication Barring Hierarchical Originating Rule
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:4933","type":"sequence","children":[{"id":"6337d0cfba4de1c83587203c5b0bae54:4934","type":"choice"}]}]
 */
class ServiceProviderCommunicationBarringHierarchicalOriginatingRule
{
    /**
     * @ElementName criteria
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4934
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $criteria = null;

    /**
     * @ElementName digitPatternCriteria
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4934
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $digitPatternCriteria = null;

    /**
     * @ElementName action
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingAction
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4933
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingAction|null
     */
    protected $action = null;

    /**
     * @ElementName treatmentId
     * @Type string
     * @Nillable
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4933
     * @MinLength 1
     * @MaxLength 40
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $treatmentId = null;

    /**
     * @ElementName transferNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4933
     * @MinLength 1
     * @MaxLength 30
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $transferNumber = null;

    /**
     * @ElementName callTimeoutSeconds
     * @Type int
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4933
     * @MinInclusive 60
     * @MaxInclusive 86400
     * @var int|null
     */
    protected $callTimeoutSeconds = null;

    /**
     * @ElementName timeSchedule
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4933
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $timeSchedule = null;

    /**
     * @ElementName holidaySchedule
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4933
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $holidaySchedule = null;

    /**
     * @ElementName priority
     * @Type float
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4933
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingAction
     */
    public function getAction()
    {
        return $this->action instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->action;
    }

    /**
     * Setter for action
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingAction $action
     * @return $this
     */
    public function setAction(\CWM\BroadWorksConnector\Ocip\Models\CommunicationBarringOriginatingAction $action)
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
     * Getter for treatmentId
     *
     * @return string|null
     */
    public function getTreatmentId()
    {
        return $this->treatmentId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->treatmentId;
    }

    /**
     * Setter for treatmentId
     *
     * @param string|null $treatmentId
     * @return $this
     */
    public function setTreatmentId($treatmentId = null)
    {
        if ($treatmentId === null) {
            $this->treatmentId = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->treatmentId = $treatmentId;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTreatmentId()
    {
        $this->treatmentId = null;
        return $this;
    }

    /**
     * Getter for transferNumber
     *
     * @return string|null
     */
    public function getTransferNumber()
    {
        return $this->transferNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->transferNumber;
    }

    /**
     * Setter for transferNumber
     *
     * @param string|null $transferNumber
     * @return $this
     */
    public function setTransferNumber($transferNumber = null)
    {
        if ($transferNumber === null) {
            $this->transferNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->transferNumber = $transferNumber;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTransferNumber()
    {
        $this->transferNumber = null;
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

