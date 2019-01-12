<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerMeetMeConferencingGetResponse
 *
 * Response to ResellerMeetMeConferencingGetRequest.
 *
 * @see ResellerMeetMeConferencingGetRequest
 * @Groups [{"id":"0fd24121d16995c994d40bc408dbcfa5:350","type":"sequence"}]
 */
class ResellerMeetMeConferencingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName conferenceFromAddress
     * @Type string
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:350
     * @var string|null
     */
    private $conferenceFromAddress = null;

    /**
     * @ElementName maxAllocatedPorts
     * @Type int
     * @Group 0fd24121d16995c994d40bc408dbcfa5:350
     * @var int|null
     */
    private $maxAllocatedPorts = null;

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


}

