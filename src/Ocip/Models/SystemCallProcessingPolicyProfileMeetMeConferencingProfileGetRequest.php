<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileMeetMeConferencingProfileGetRequest
 *
 * Request to get the configuration for a call processing policy profile Meet-Me Conferencing subscriber type profile.
 *         The response is either a SystemCallProcessingPolicyProfileMeetMeConferencingProfileGetResponse or an
 *         ErrorResponse.
 *         
 *         Replaced by: SystemCallProcessingPolicyProfileMeetMeConferencingProfileGetRequest22
 *
 * @see SystemCallProcessingPolicyProfileMeetMeConferencingProfileGetResponse
 * @see ErrorResponse
 * @see SystemCallProcessingPolicyProfileMeetMeConferencingProfileGetRequest22
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:24076","type":"sequence"}]
 */
class SystemCallProcessingPolicyProfileMeetMeConferencingProfileGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName callProcessingPolicyProfileName
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:24076
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

