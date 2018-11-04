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
 */
class SystemCommunicationBarringIncomingCriteriaModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName newName
     * @var string|null
     */
    private $newName = null;

    /**
     * @ElementName description
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $description = null;

    /**
     * @ElementName timeSchedule
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $timeSchedule = null;

    /**
     * @ElementName holidaySchedule
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $holidaySchedule = null;

    /**
     * @ElementName matchNumberPortabilityStatus
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementNumberPortabilityStatusList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $matchNumberPortabilityStatus = null;

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Getter for newName
     *
     * @ElementName newName
     * @return string|null
     */
    public function getNewName()
    {
        return $this->newName;
    }

    /**
     * Setter for newName
     *
     * @ElementName newName
     * @param string|null $newName
     * @return $this
     */
    public function setNewName($newName)
    {
        $this->newName = $newName;
        return $this;
    }

    /**
     * Getter for description
     *
     * @ElementName description
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Getter for timeSchedule
     *
     * @ElementName timeSchedule
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getTimeSchedule()
    {
        return $this->timeSchedule;
    }

    /**
     * Setter for timeSchedule
     *
     * @ElementName timeSchedule
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $timeSchedule
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getHolidaySchedule()
    {
        return $this->holidaySchedule;
    }

    /**
     * Setter for holidaySchedule
     *
     * @ElementName holidaySchedule
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $holidaySchedule
     * @return $this
     */
    public function setHolidaySchedule($holidaySchedule)
    {
        $this->holidaySchedule = $holidaySchedule;
        return $this;
    }

    /**
     * Getter for matchNumberPortabilityStatus
     *
     * @ElementName matchNumberPortabilityStatus
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementNumberPortabilityStatusList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getMatchNumberPortabilityStatus()
    {
        return $this->matchNumberPortabilityStatus;
    }

    /**
     * Setter for matchNumberPortabilityStatus
     *
     * @ElementName matchNumberPortabilityStatus
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementNumberPortabilityStatusList|null|\CWM\BroadWorksConnector\Ocip\Nil $matchNumberPortabilityStatus
     * @return $this
     */
    public function setMatchNumberPortabilityStatus($matchNumberPortabilityStatus)
    {
        $this->matchNumberPortabilityStatus = $matchNumberPortabilityStatus;
        return $this;
    }


}

