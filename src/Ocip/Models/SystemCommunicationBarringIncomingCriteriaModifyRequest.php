<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringIncomingCriteriaModifyRequest
 *
 * Modify an existing Communication Barring Incoming Criteria.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:6208","type":"sequence"}]
 */
class SystemCommunicationBarringIncomingCriteriaModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6208
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $name = null;

    /**
     * @ElementName newName
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6208
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $newName = null;

    /**
     * @ElementName description
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6208
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $description = null;

    /**
     * @ElementName timeSchedule
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6208
     * @MinLength 1
     * @MaxLength 40
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $timeSchedule = null;

    /**
     * @ElementName holidaySchedule
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6208
     * @MinLength 1
     * @MaxLength 40
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $holidaySchedule = null;

    /**
     * @ElementName matchNumberPortabilityStatus
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementNumberPortabilityStatusList
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6208
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementNumberPortabilityStatusList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $matchNumberPortabilityStatus = null;

    /**
     * @ElementName callTaggedAsSpam
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:6208
     * @var bool|null
     */
    protected $callTaggedAsSpam = null;

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
     * Getter for newName
     *
     * @return string
     */
    public function getNewName()
    {
        return $this->newName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newName;
    }

    /**
     * Setter for newName
     *
     * @param string $newName
     * @return $this
     */
    public function setNewName($newName)
    {
        $this->newName = $newName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewName()
    {
        $this->newName = null;
        return $this;
    }

    /**
     * Getter for description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description = null)
    {
        if ($description === null) {
            $this->description = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->description = $description;
        }
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
     * @return string|null
     */
    public function getTimeSchedule()
    {
        return $this->timeSchedule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeSchedule;
    }

    /**
     * Setter for timeSchedule
     *
     * @param string|null $timeSchedule
     * @return $this
     */
    public function setTimeSchedule($timeSchedule = null)
    {
        if ($timeSchedule === null) {
            $this->timeSchedule = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->timeSchedule = $timeSchedule;
        }
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
     * @return string|null
     */
    public function getHolidaySchedule()
    {
        return $this->holidaySchedule instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->holidaySchedule;
    }

    /**
     * Setter for holidaySchedule
     *
     * @param string|null $holidaySchedule
     * @return $this
     */
    public function setHolidaySchedule($holidaySchedule = null)
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
     * Getter for matchNumberPortabilityStatus
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementNumberPortabilityStatusList|null
     */
    public function getMatchNumberPortabilityStatus()
    {
        return $this->matchNumberPortabilityStatus instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchNumberPortabilityStatus;
    }

    /**
     * Setter for matchNumberPortabilityStatus
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementNumberPortabilityStatusList|null $matchNumberPortabilityStatus
     * @return $this
     */
    public function setMatchNumberPortabilityStatus(\CWM\BroadWorksConnector\Ocip\Models\ReplacementNumberPortabilityStatusList $matchNumberPortabilityStatus = null)
    {
        if ($matchNumberPortabilityStatus === null) {
            $this->matchNumberPortabilityStatus = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->matchNumberPortabilityStatus = $matchNumberPortabilityStatus;
        }
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

