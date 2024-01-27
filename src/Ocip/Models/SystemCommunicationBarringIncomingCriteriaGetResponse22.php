<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringIncomingCriteriaGetResponse22
 *
 * Response to the SystemCommunicationBarringIncomingCriteriaGetRequest.
 *         The response contains the Communication Barring Incoming Criteria information.
 *
 * @see SystemCommunicationBarringIncomingCriteriaGetRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:6268","type":"sequence"}]
 */
class SystemCommunicationBarringIncomingCriteriaGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:6268
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $description = null;

    /**
     * @ElementName timeSchedule
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:6268
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $timeSchedule = null;

    /**
     * @ElementName holidaySchedule
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:6268
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
     * @Group da582a1f8028404e70d260cf1f891033:6268
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $matchNumberPortabilityStatus = [
        
    ];

    /**
     * @ElementName callTaggedAsSpam
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:6268
     * @var bool|null
     */
    protected $callTaggedAsSpam = null;

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

    /**
     * Getter for callTaggedAsSpam
     *
     * @return bool
     */
    public function getCallTaggedAsSpam()
    {
        return $this->callTaggedAsSpam instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callTaggedAsSpam;
    }

    /**
     * Setter for callTaggedAsSpam
     *
     * @param bool $callTaggedAsSpam
     * @return $this
     */
    public function setCallTaggedAsSpam($callTaggedAsSpam)
    {
        $this->callTaggedAsSpam = $callTaggedAsSpam;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallTaggedAsSpam()
    {
        $this->callTaggedAsSpam = null;
        return $this;
    }
}

