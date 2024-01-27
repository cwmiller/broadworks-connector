<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileUserProfileGetRequest22V2
 *
 * Request to get the configuration for a call processing policy profile user subscriber type profile.
 *         The response is either a SystemCallProcessingPolicyProfileUserProfileGetResponse22V2 or an ErrorResponse.
 *         
 *         Replaced by: SystemCallProcessingPolicyProfileUserProfileGetRequest22V2 in AS data mode.
 *
 * @see SystemCallProcessingPolicyProfileUserProfileGetResponse22V2
 * @see ErrorResponse
 * @see SystemCallProcessingPolicyProfileUserProfileGetRequest22V2
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:24691","type":"sequence"}]
 */
class SystemCallProcessingPolicyProfileUserProfileGetRequest22V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName callProcessingPolicyProfileName
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:24691
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

