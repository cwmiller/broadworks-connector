<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileCollaborateProfileGetRequest22
 *
 * Request to get the configuration for a call processing policy profile Collaborate subscriber type profile.
 *         The response is either a SystemCallProcessingPolicyProfileCollaborateProfileGetResponse22 or an
 *         ErrorResponse.
 *         
 *         Replaced by: SystemCallProcessingPolicyProfileCollaborateProfileGetRequest22V2 in AS data mode.
 *
 * @see SystemCallProcessingPolicyProfileCollaborateProfileGetResponse22
 * @see ErrorResponse
 * @see SystemCallProcessingPolicyProfileCollaborateProfileGetRequest22V2
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:23352","type":"sequence"}]
 */
class SystemCallProcessingPolicyProfileCollaborateProfileGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName callProcessingPolicyProfileName
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:23352
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

