<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerMeetMeConferencingGetResponse
 *
 * Response to ResellerMeetMeConferencingGetRequest.
 *
 * @see ResellerMeetMeConferencingGetRequest
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:4557","type":"sequence"}]
 */
class ResellerMeetMeConferencingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName conferenceFromAddress
     * @Type string
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:4557
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $conferenceFromAddress = null;

    /**
     * @ElementName maxAllocatedPorts
     * @Type int
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:4557
     * @MinInclusive 0
     * @MaxInclusive 999999
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

