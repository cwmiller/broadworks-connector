<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerMeetMeConferencingModifyRequest
 *
 * Modify the reseller level data associated with Meet-Me Conferencing functions.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"0fd24121d16995c994d40bc408dbcfa5:367","type":"sequence"}]
 */
class ResellerMeetMeConferencingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @Type string
     * @Group 0fd24121d16995c994d40bc408dbcfa5:367
     * @var string|null
     */
    private $resellerId = null;

    /**
     * @ElementName conferenceFromAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:367
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $conferenceFromAddress = null;

    /**
     * @ElementName maxAllocatedPorts
     * @Type int
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:367
     * @var int|null
     */
    private $maxAllocatedPorts = null;

    /**
     * Getter for resellerId
     *
     * @return string
     */
    public function getResellerId()
    {
        return $this->resellerId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resellerId;
    }

    /**
     * Setter for resellerId
     *
     * @param string $resellerId
     * @return $this
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResellerId()
    {
        $this->resellerId = null;
        return $this;
    }

    /**
     * Getter for conferenceFromAddress
     *
     * @return string|null
     */
    public function getConferenceFromAddress()
    {
        return $this->conferenceFromAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->conferenceFromAddress;
    }

    /**
     * Setter for conferenceFromAddress
     *
     * @param string|null $conferenceFromAddress
     * @return $this
     */
    public function setConferenceFromAddress($conferenceFromAddress)
    {
        if ($conferenceFromAddress === null) {
            $this->conferenceFromAddress = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->conferenceFromAddress = $conferenceFromAddress;
        }
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

