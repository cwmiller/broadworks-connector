<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileVoicePortalProfileGetRequest22
 *
 * Request to get the configuration for a call processing policy profile Voice Portal subscriber type profile.
 *         The response is either a SystemCallProcessingPolicyProfileVoicePortalProfileGetResponse22 or an
 *         ErrorResponse.
 *         Replaced by: SystemCallProcessingPolicyProfileVoicePortalProfileGetRequest22V2.
 *
 * @see SystemCallProcessingPolicyProfileVoicePortalProfileGetResponse22
 * @see ErrorResponse
 * @see SystemCallProcessingPolicyProfileVoicePortalProfileGetRequest22V2
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:24202","type":"sequence"}]
 */
class SystemCallProcessingPolicyProfileVoicePortalProfileGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName callProcessingPolicyProfileName
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:24202
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

