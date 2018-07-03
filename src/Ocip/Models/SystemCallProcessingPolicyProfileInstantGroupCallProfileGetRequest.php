<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileInstantGroupCallProfileGetRequest
 *
 * Request to get the configuration for a call processing policy profile Instant
 * Group Call subscriber type profile.
 *         The response is either a
 * SystemCallProcessingPolicyProfileInstantGroupCallProfileGetResponse22 or an
 *         ErrorResponse.
 *         
 *         Replaced by:
 * SystemCallProcessingPolicyProfileInstantGroupCallProfileGetRequest22
 *
 * @see SystemCallProcessingPolicyProfileInstantGroupCallProfileGetResponse22
 * @see ErrorResponse
 * @see SystemCallProcessingPolicyProfileInstantGroupCallProfileGetRequest22
 */
class SystemCallProcessingPolicyProfileInstantGroupCallProfileGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName callProcessingPolicyProfileName
     * @var string|null
     */
    private $callProcessingPolicyProfileName = null;

    /**
     * Getter for callProcessingPolicyProfileName
     *
     * @ElementName callProcessingPolicyProfileName
     * @return string|null
     */
    public function getCallProcessingPolicyProfileName()
    {
        return $this->callProcessingPolicyProfileName;
    }

    /**
     * Setter for callProcessingPolicyProfileName
     *
     * @ElementName callProcessingPolicyProfileName
     * @param string|null $callProcessingPolicyProfileName
     * @return $this
     */
    public function setCallProcessingPolicyProfileName($callProcessingPolicyProfileName)
    {
        $this->callProcessingPolicyProfileName = $callProcessingPolicyProfileName;
        return $this;
    }


}

