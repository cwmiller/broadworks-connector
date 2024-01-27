<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileAutoAttendantProfileGetRequest
 *
 * Request to get the configuration for a call processing policy profile Auto Attendant subscriber type profile.
 *         The response is either a SystemCallProcessingPolicyProfileAutoAttendantProfileGetResponse or an
 *         ErrorResponse.
 *         The response contains the call processing policy profile setting for Auto Attendant.
 *         
 *         Replaced by:  SystemCallProcessingPolicyProfileAutoAttendantProfileGetRequest22
 *
 * @see SystemCallProcessingPolicyProfileAutoAttendantProfileGetResponse
 * @see ErrorResponse
 * @see SystemCallProcessingPolicyProfileAutoAttendantProfileGetRequest22
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:22930","type":"sequence"}]
 */
class SystemCallProcessingPolicyProfileAutoAttendantProfileGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName callProcessingPolicyProfileName
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:22930
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

