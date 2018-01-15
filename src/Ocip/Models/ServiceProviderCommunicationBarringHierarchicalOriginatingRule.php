<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCommunicationBarringHierarchicalOriginatingRule
 *
 * Service Provider Communication Barring Hierarchical Originating Rule
 */
class ServiceProviderCommunicationBarringHierarchicalOriginatingRule
{

    /**
     * @ElementName criteria
     * @var string|null
     */
    private $criteria = null;

    /**
     * @ElementName digitPatternCriteria
     * @var string|null
     */
    private $digitPatternCriteria = null;

    /**
     * @ElementName action
     * @var string|null
     */
    private $action = null;

    /**
     * @ElementName treatmentId
     * @var string|null
     */
    private $treatmentId = null;

    /**
     * @ElementName transferNumber
     * @var string|null
     */
    private $transferNumber = null;

    /**
     * @ElementName callTimeoutSeconds
     * @var int|null
     */
    private $callTimeoutSeconds = null;

    /**
     * @ElementName timeSchedule
     * @var string|null
     */
    private $timeSchedule = null;

    /**
     * @ElementName holidaySchedule
     * @var string|null
     */
    private $holidaySchedule = null;

    /**
     * @ElementName priority
     * @var float|null
     */
    private $priority = null;

    /**
     * Getter for criteria
     *
     * @ElementName criteria
     * @return string|null
     */
    public function getCriteria()
    {
        return $this->criteria;
    }

    /**
     * Setter for criteria
     *
     * @ElementName criteria
     * @param string|null $criteria
     * @return $this
     */
    public function setCriteria($criteria)
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * Getter for digitPatternCriteria
     *
     * @ElementName digitPatternCriteria
     * @return string|null
     */
    public function getDigitPatternCriteria()
    {
        return $this->digitPatternCriteria;
    }

    /**
     * Setter for digitPatternCriteria
     *
     * @ElementName digitPatternCriteria
     * @param string|null $digitPatternCriteria
     * @return $this
     */
    public function setDigitPatternCriteria($digitPatternCriteria)
    {
        $this->digitPatternCriteria = $digitPatternCriteria;
        return $this;
    }

    /**
     * Getter for action
     *
     * @ElementName action
     * @return string|null
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Setter for action
     *
     * @ElementName action
     * @param string|null $action
     * @return $this
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * Getter for treatmentId
     *
     * @ElementName treatmentId
     * @return string|null
     */
    public function getTreatmentId()
    {
        return $this->treatmentId;
    }

    /**
     * Setter for treatmentId
     *
     * @ElementName treatmentId
     * @param string|null $treatmentId
     * @return $this
     */
    public function setTreatmentId($treatmentId)
    {
        $this->treatmentId = $treatmentId;
        return $this;
    }

    /**
     * Getter for transferNumber
     *
     * @ElementName transferNumber
     * @return string|null
     */
    public function getTransferNumber()
    {
        return $this->transferNumber;
    }

    /**
     * Setter for transferNumber
     *
     * @ElementName transferNumber
     * @param string|null $transferNumber
     * @return $this
     */
    public function setTransferNumber($transferNumber)
    {
        $this->transferNumber = $transferNumber;
        return $this;
    }

    /**
     * Getter for callTimeoutSeconds
     *
     * @ElementName callTimeoutSeconds
     * @return int|null
     */
    public function getCallTimeoutSeconds()
    {
        return $this->callTimeoutSeconds;
    }

    /**
     * Setter for callTimeoutSeconds
     *
     * @ElementName callTimeoutSeconds
     * @param int|null $callTimeoutSeconds
     * @return $this
     */
    public function setCallTimeoutSeconds($callTimeoutSeconds)
    {
        $this->callTimeoutSeconds = $callTimeoutSeconds;
        return $this;
    }

    /**
     * Getter for timeSchedule
     *
     * @ElementName timeSchedule
     * @return string|null
     */
    public function getTimeSchedule()
    {
        return $this->timeSchedule;
    }

    /**
     * Setter for timeSchedule
     *
     * @ElementName timeSchedule
     * @param string|null $timeSchedule
     * @return $this
     */
    public function setTimeSchedule($timeSchedule)
    {
        $this->timeSchedule = $timeSchedule;
        return $this;
    }

    /**
     * Getter for holidaySchedule
     *
     * @ElementName holidaySchedule
     * @return string|null
     */
    public function getHolidaySchedule()
    {
        return $this->holidaySchedule;
    }

    /**
     * Setter for holidaySchedule
     *
     * @ElementName holidaySchedule
     * @param string|null $holidaySchedule
     * @return $this
     */
    public function setHolidaySchedule($holidaySchedule)
    {
        $this->holidaySchedule = $holidaySchedule;
        return $this;
    }

    /**
     * Getter for priority
     *
     * @ElementName priority
     * @return float|null
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Setter for priority
     *
     * @ElementName priority
     * @param float|null $priority
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }


}

