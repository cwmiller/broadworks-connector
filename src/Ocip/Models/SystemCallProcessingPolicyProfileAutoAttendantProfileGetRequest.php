<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallProcessingPolicyProfileAutoAttendantProfileGetRequest
 *
 * Request to get the configuration for a call processing policy profile Auto Attendant subscriber type profile.
 *         The response is either a SystemCallProcessingPolicyProfileAutoAttendantProfileGetRequestResponse or an
 *         ErrorResponse.
 *         The response contains the call processing policy profile setting for Auto Attendant.
 *         
 *         Replaced by:  SystemCallProcessingPolicyProfileAutoAttendantProfileGetRequest22
 *
 * @see SystemCallProcessingPolicyProfileAutoAttendantProfileGetRequestResponse
 * @see ErrorResponse
 * @see SystemCallProcessingPolicyProfileAutoAttendantProfileGetRequest22
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:22160","type":"sequence"}]
 */
class SystemCallProcessingPolicyProfileAutoAttendantProfileGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName callProcessingPolicyProfileName
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:22160
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

