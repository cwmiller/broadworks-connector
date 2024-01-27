<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileTrunkGroupPilotProfileGetRequest22
 *
 * Request to get the configuration for a call processing policy profile Trunk Group Pilot user subscriber type profile.
 *         The response is either a SystemCallProcessingPolicyProfileTrunkGroupPilotProfileGetResponse22 or an
 *         ErrorResponse.
 *        
 *         Replaced by: SystemCallProcessingPolicyProfileTrunkGroupPilotProfileGetRequest22V2 in AS data mode.
 *
 * @see SystemCallProcessingPolicyProfileTrunkGroupPilotProfileGetResponse22
 * @see ErrorResponse
 * @see SystemCallProcessingPolicyProfileTrunkGroupPilotProfileGetRequest22V2
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:24417","type":"sequence"}]
 */
class SystemCallProcessingPolicyProfileTrunkGroupPilotProfileGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName callProcessingPolicyProfileName
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:24417
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $callProcessingPolicyProfileName = null;

    /**
     * Getter for callProcessingPolicyProfileName
     *
     * @return string
     */
    public function getCallProcessingPolicyProfileName()
    {
        return $this->callProcessingPolicyProfileName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callProcessingPolicyProfileName;
    }

    /**
     * Setter for callProcessingPolicyProfileName
     *
     * @param string $callProcessingPolicyProfileName
     * @return $this
     */
    public function setCallProcessingPolicyProfileName($callProcessingPolicyProfileName)
    {
        $this->callProcessingPolicyProfileName = $callProcessingPolicyProfileName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallProcessingPolicyProfileName()
    {
        $this->callProcessingPolicyProfileName = null;
        return $this;
    }
}

