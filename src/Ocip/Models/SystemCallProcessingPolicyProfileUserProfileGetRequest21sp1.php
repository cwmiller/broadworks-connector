<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileUserProfileGetRequest21sp1
 *
 * Request to get the configuration for a call processing policy profile user
 * subscriber type profile.
 *         The response is either a
 * SystemCallProcessingPolicyProfileUserProfileGetResponse21sp1 or an
 *         ErrorResponse.
 *         Replaced by: SystemCallProcessingPolicyProfileUserProfileGetRequest22 in
 * AS data mode
 *
 * @see SystemCallProcessingPolicyProfileUserProfileGetResponse21sp1
 * @see ErrorResponse
 * @see SystemCallProcessingPolicyProfileUserProfileGetRequest22
 */
class SystemCallProcessingPolicyProfileUserProfileGetRequest21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

