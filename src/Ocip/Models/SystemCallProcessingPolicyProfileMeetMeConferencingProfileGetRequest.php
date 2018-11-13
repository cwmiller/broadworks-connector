<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileMeetMeConferencingProfileGetRequest
 *
 * Request to get the configuration for a call processing policy profile Meet-Me
 * Conferencing subscriber type profile.
 *         The response is either a
 * SystemCallProcessingPolicyProfileMeetMeConferencingProfileGetResponse or an
 *         ErrorResponse.
 *         
 *         Replaced by:
 * SystemCallProcessingPolicyProfileMeetMeConferencingProfileGetRequest22
 *
 * @see SystemCallProcessingPolicyProfileMeetMeConferencingProfileGetResponse
 * @see ErrorResponse
 * @see SystemCallProcessingPolicyProfileMeetMeConferencingProfileGetRequest22
 */
class SystemCallProcessingPolicyProfileMeetMeConferencingProfileGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

