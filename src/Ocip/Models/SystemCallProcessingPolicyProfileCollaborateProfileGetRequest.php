<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileCollaborateProfileGetRequest
 *
 * Request to get the configuration for a call processing policy profile
 * Collaborate subscriber type profile.
 *         The response is either a
 * SystemCallProcessingPolicyProfileCollaborateProfileGetResponse or an
 *         ErrorResponse.
 *         
 *         Replaced by: 
 * SystemCallProcessingPolicyProfileCollaborateProfileGetRequest22
 *
 * @see SystemCallProcessingPolicyProfileCollaborateProfileGetResponse
 * @see ErrorResponse
 * @see SystemCallProcessingPolicyProfileCollaborateProfileGetRequest22
 */
class SystemCallProcessingPolicyProfileCollaborateProfileGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName callProcessingPolicyProfileName
     * @Type string
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

