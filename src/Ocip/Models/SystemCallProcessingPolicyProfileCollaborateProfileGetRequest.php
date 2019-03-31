<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileCollaborateProfileGetRequest
 *
 * Request to get the configuration for a call processing policy profile Collaborate subscriber type
 *                 profile.
 *                 The response is either a SystemCallProcessingPolicyProfileCollaborateProfileGetResponse or an
 *                 ErrorResponse.
 *
 *                 Replaced by: SystemCallProcessingPolicyProfileCollaborateProfileGetRequest22
 *
 * @see SystemCallProcessingPolicyProfileCollaborateProfileGetResponse
 * @see ErrorResponse
 * @see SystemCallProcessingPolicyProfileCollaborateProfileGetRequest22
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:37676","type":"sequence"}]
 */
class SystemCallProcessingPolicyProfileCollaborateProfileGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName callProcessingPolicyProfileName
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:37676
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

