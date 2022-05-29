<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerMeetMeConferencingModifyRequest
 *
 * Modify the reseller level data associated with Meet-Me Conferencing functions.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         The following data elements are only modified for System and Provisioning Administrators:        
 * 		maxAllocatedPorts.
 * 		The following data elements are only modified for System and Provisioning Administrators and AS Mode only:
 * 		disableUnlimitedMeetMePorts,
 * 		enableMaxAllocatedPorts.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"0fd24121d16995c994d40bc408dbcfa5:380","type":"sequence"}]
 */
class ResellerMeetMeConferencingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @Type string
     * @Group 0fd24121d16995c994d40bc408dbcfa5:380
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    protected $resellerId = null;

    /**
     * @ElementName conferenceFromAddress
     * @Type string
     * @Nillable
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:380
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $conferenceFromAddress = null;

    /**
     * @ElementName maxAllocatedPorts
     * @Type int
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:380
     * @MinInclusive 0
     * @MaxInclusive 999999
     * @var int|null
     */
    protected $maxAllocatedPorts = null;

    /**
     * @ElementName disableUnlimitedMeetMePorts
     * @Type bool
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:380
     * @var bool|null
     */
    protected $disableUnlimitedMeetMePorts = null;

    /**
     * @ElementName enableMaxAllocatedPorts
     * @Type bool
     * @Optional
     * @Group 0fd24121d16995c994d40bc408dbcfa5:380
     * @var bool|null
     */
    protected $enableMaxAllocatedPorts = null;

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
    public function setConferenceFromAddress($conferenceFromAddress = null)
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

