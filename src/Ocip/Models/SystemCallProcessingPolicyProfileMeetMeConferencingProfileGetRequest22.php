<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileMeetMeConferencingProfileGetRequest22
 *
 * Request to get the configuration for a call processing policy profile Meet-Me Conferencing subscriber type profile.
 *         The response is either a SystemCallProcessingPolicyProfileMeetMeConferencingProfileGetResponse22 or an
 *         ErrorResponse.
 *         
 *         Replaced by: SystemCallProcessingPolicyProfileMeetMeConferencingProfileGetRequest22V2.
 *
 * @see SystemCallProcessingPolicyProfileMeetMeConferencingProfileGetResponse22
 * @see ErrorResponse
 * @see SystemCallProcessingPolicyProfileMeetMeConferencingProfileGetRequest22V2
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:23325","type":"sequence"}]
 */
class SystemCallProcessingPolicyProfileMeetMeConferencingProfileGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName callProcessingPolicyProfileName
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:23325
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

