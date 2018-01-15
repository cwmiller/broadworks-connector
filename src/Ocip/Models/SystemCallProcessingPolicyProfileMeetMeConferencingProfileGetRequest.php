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
 */
class SystemCallProcessingPolicyProfileMeetMeConferencingProfileGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

