<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileAutoAttendantProfileGetRequest
 *
 * Request to get the configuration for a call processing policy profile Auto
 * Attendant subscriber type profile.
 *         The response is either a
 * SystemCallProcessingPolicyProfileAutoAttendantProfileGetRequestResponse or an
 *         ErrorResponse.
 *         The response contains the call processing policy profile setting for
 * Auto Attendant.
 */
class SystemCallProcessingPolicyProfileAutoAttendantProfileGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

