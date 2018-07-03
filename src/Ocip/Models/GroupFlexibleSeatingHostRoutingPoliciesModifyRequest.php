<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFlexibleSeatingHostRoutingPoliciesModifyRequest
 *
 * Modify a flexible seating host’s routing policies
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupFlexibleSeatingHostRoutingPoliciesModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName allowEmergencyCalls
     * @var bool|null
     */
    private $allowEmergencyCalls = null;

    /**
     * @ElementName allowCallsToVoicePortal
     * @var bool|null
     */
    private $allowCallsToVoicePortal = null;

    /**
     * Getter for serviceUserId
     *
     * @ElementName serviceUserId
     * @return string|null
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @ElementName serviceUserId
     * @param string|null $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * Getter for allowEmergencyCalls
     *
     * @ElementName allowEmergencyCalls
     * @return bool|null
     */
    public function getAllowEmergencyCalls()
    {
        return $this->allowEmergencyCalls;
    }

    /**
     * Setter for allowEmergencyCalls
     *
     * @ElementName allowEmergencyCalls
     * @param bool|null $allowEmergencyCalls
     * @return $this
     */
    public function setAllowEmergencyCalls($allowEmergencyCalls)
    {
        $this->allowEmergencyCalls = $allowEmergencyCalls;
        return $this;
    }

    /**
     * Getter for allowCallsToVoicePortal
     *
     * @ElementName allowCallsToVoicePortal
     * @return bool|null
     */
    public function getAllowCallsToVoicePortal()
    {
        return $this->allowCallsToVoicePortal;
    }

    /**
     * Setter for allowCallsToVoicePortal
     *
     * @ElementName allowCallsToVoicePortal
     * @param bool|null $allowCallsToVoicePortal
     * @return $this
     */
    public function setAllowCallsToVoicePortal($allowCallsToVoicePortal)
    {
        $this->allowCallsToVoicePortal = $allowCallsToVoicePortal;
        return $this;
    }


}

