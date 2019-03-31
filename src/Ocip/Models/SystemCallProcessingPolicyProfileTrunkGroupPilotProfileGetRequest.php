<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileTrunkGroupPilotProfileGetRequest
 *
 * Request to get the configuration for a call processing policy profile Trunk Group Pilot user subscriber
 *                 type profile.
 *                 The response is either a SystemCallProcessingPolicyProfileTrunkGroupPilotProfileGetResponse or an
 *                 ErrorResponse.
 *
 *                 Replaced by: SystemCallProcessingPolicyProfileTrunkGroupPilotProfileGetRequest22
 *
 * @see SystemCallProcessingPolicyProfileTrunkGroupPilotProfileGetResponse
 * @see ErrorResponse
 * @see SystemCallProcessingPolicyProfileTrunkGroupPilotProfileGetRequest22
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:38247","type":"sequence"}]
 */
class SystemCallProcessingPolicyProfileTrunkGroupPilotProfileGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName callProcessingPolicyProfileName
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:38247
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $callProcessingPolicyProfileName = null;

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

