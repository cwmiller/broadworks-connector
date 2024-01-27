<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileTrunkGroupPilotProfileGetRequest22V3
 *
 * Request to get the configuration for a call processing policy profile Trunk Group Pilot user subscriber type profile.
 *         The response is either a SystemCallProcessingPolicyProfileTrunkGroupPilotProfileGetResponse22V3 or an
 *         ErrorResponse.
 *
 * @see SystemCallProcessingPolicyProfileTrunkGroupPilotProfileGetResponse22V3
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:4715","type":"sequence"}]
 */
class SystemCallProcessingPolicyProfileTrunkGroupPilotProfileGetRequest22V3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName callProcessingPolicyProfileName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:4715
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

