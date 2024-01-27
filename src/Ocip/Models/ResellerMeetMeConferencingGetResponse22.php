<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerMeetMeConferencingGetResponse22
 *
 * Response to ResellerMeetMeConferencingGetRequest22.
 *
 * @see ResellerMeetMeConferencingGetRequest22
 * @Groups [{"id":"adf25df72505d1c476ebb480b6cce18d:355","type":"sequence"}]
 */
class ResellerMeetMeConferencingGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName conferenceFromAddress
     * @Type string
     * @Optional
     * @Group adf25df72505d1c476ebb480b6cce18d:355
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $conferenceFromAddress = null;

    /**
     * @ElementName maxAllocatedPorts
     * @Type int
     * @Optional
     * @Group adf25df72505d1c476ebb480b6cce18d:355
     * @MinInclusive 0
     * @MaxInclusive 999999
     * @var int|null
     */
    protected $maxAllocatedPorts = null;

    /**
     * @ElementName disableUnlimitedMeetMePorts
     * @Type bool
     * @Optional
     * @Group adf25df72505d1c476ebb480b6cce18d:355
     * @var bool|null
     */
    protected $disableUnlimitedMeetMePorts = null;

    /**
     * @ElementName enableMaxAllocatedPorts
     * @Type bool
     * @Optional
     * @Group adf25df72505d1c476ebb480b6cce18d:355
     * @var bool|null
     */
    protected $enableMaxAllocatedPorts = null;

    /**
     * Getter for conferenceFromAddress
     *
     * @return string
     */
    public function getConferenceFromAddress()
    {
        return $this->conferenceFromAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->conferenceFromAddress;
    }

    /**
     * Setter for conferenceFromAddress
     *
     * @param string $conferenceFromAddress
     * @return $this
     */
    public function setConferenceFromAddress($conferenceFromAddress)
    {
        $this->conferenceFromAddress = $conferenceFromAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetConferenceFromAddress()
    {
        $this->conferenceFromAddress = null;
        return $this;
    }

    /**
     * Getter for maxAllocatedPorts
     *
     * @return int
     */
    public function getMaxAllocatedPorts()
    {
        return $this->maxAllocatedPorts instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxAllocatedPorts;
    }

    /**
     * Setter for maxAllocatedPorts
     *
     * @param int $maxAllocatedPorts
     * @return $this
     */
    public function setMaxAllocatedPorts($maxAllocatedPorts)
    {
        $this->maxAllocatedPorts = $maxAllocatedPorts;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxAllocatedPorts()
    {
        $this->maxAllocatedPorts = null;
        return $this;
    }

    /**
     * Getter for disableUnlimitedMeetMePorts
     *
     * @return bool
     */
    public function getDisableUnlimitedMeetMePorts()
    {
        return $this->disableUnlimitedMeetMePorts instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->disableUnlimitedMeetMePorts;
    }

    /**
     * Setter for disableUnlimitedMeetMePorts
     *
     * @param bool $disableUnlimitedMeetMePorts
     * @return $this
     */
    public function setDisableUnlimitedMeetMePorts($disableUnlimitedMeetMePorts)
    {
        $this->disableUnlimitedMeetMePorts = $disableUnlimitedMeetMePorts;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisableUnlimitedMeetMePorts()
    {
        $this->disableUnlimitedMeetMePorts = null;
        return $this;
    }

    /**
     * Getter for enableMaxAllocatedPorts
     *
     * @return bool
     */
    public function getEnableMaxAllocatedPorts()
    {
        return $this->enableMaxAllocatedPorts instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableMaxAllocatedPorts;
    }

    /**
     * Setter for enableMaxAllocatedPorts
     *
     * @param bool $enableMaxAllocatedPorts
     * @return $this
     */
    public function setEnableMaxAllocatedPorts($enableMaxAllocatedPorts)
    {
        $this->enableMaxAllocatedPorts = $enableMaxAllocatedPorts;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableMaxAllocatedPorts()
    {
        $this->enableMaxAllocatedPorts = null;
        return $this;
    }
}

