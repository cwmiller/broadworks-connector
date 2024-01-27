<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringIncomingCriteriaGetResponse
 *
 * Response to the SystemCommunicationBarringIncomingCriteriaGetRequest.
 *         The response contains the Communication Barring Incoming Criteria information.
 *         
 *         Replaced by: SystemCommunicationBarringIncomingCriteriaGetResponse22
 *
 * @see SystemCommunicationBarringIncomingCriteriaGetRequest
 * @see SystemCommunicationBarringIncomingCriteriaGetResponse22
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:9446","type":"sequence"}]
 */
class SystemCommunicationBarringIncomingCriteriaGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:9446
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $description = null;

    /**
     * @ElementName timeSchedule
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:9446
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $timeSchedule = null;

    /**
     * @ElementName holidaySchedule
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:9446
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $holidaySchedule = null;

    /**
     * @ElementName matchNumberPortabilityStatus
     * @Type string
     * @Array
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:9446
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $matchNumberPortabilityStatus = [
        
    ];

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

