<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringIncomingCriteriaAddRequest
 *
 * Add a new Communication Barring Incoming Criteria.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         Replaced by: SystemCommunicationBarringIncomingCriteriaAddRequest22
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemCommunicationBarringIncomingCriteriaAddRequest22
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:7541","type":"sequence"}]
 */
class SystemCommunicationBarringIncomingCriteriaAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:7541
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:7541
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName timeSchedule
     * @Type string
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:7541
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $timeSchedule = null;

    /**
     * @ElementName holidaySchedule
     * @Type string
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:7541
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $holidaySchedule = null;

    /**
     * @ElementName matchNumberPortabilityStatus
     * @Type string
     * @Array
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:7541
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    private $matchNumberPortabilityStatus = array(
        
    );

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

    /**
     * Getter for description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
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
     * Getter for matchNumberPortabilityStatus
     *
     * @return string[]
     */
    public function getMatchNumberPortabilityStatus()
    {
        return $this->matchNumberPortabilityStatus instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchNumberPortabilityStatus;
    }

    /**
     * Setter for matchNumberPortabilityStatus
     *
     * @param string[] $matchNumberPortabilityStatus
     * @return $this
     */
    public function setMatchNumberPortabilityStatus(array $matchNumberPortabilityStatus)
    {
        $this->matchNumberPortabilityStatus = $matchNumberPortabilityStatus;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchNumberPortabilityStatus()
    {
        $this->matchNumberPortabilityStatus = null;
        return $this;
    }

    /**
     * Adder for matchNumberPortabilityStatus
     *
     * @param string $matchNumberPortabilityStatus
     * @return $this
     */
    public function addMatchNumberPortabilityStatus(string $matchNumberPortabilityStatus)
    {
        $this->matchNumberPortabilityStatus[] = $matchNumberPortabilityStatus;
        return $this;
    }


}

