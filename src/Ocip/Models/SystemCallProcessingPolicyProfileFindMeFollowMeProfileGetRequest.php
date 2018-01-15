<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileFindMeFollowMeProfileGetRequest
 *
 * Request to get the configuration for a call processing policy profile
 * Find-me/Follow-me subscriber type profile.
 *         The response is either a
 * SystemCallProcessingPolicyProfileFindMeFollowMeProfileGetResponse or an
 *         ErrorResponse.
 */
class SystemCallProcessingPolicyProfileFindMeFollowMeProfileGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

