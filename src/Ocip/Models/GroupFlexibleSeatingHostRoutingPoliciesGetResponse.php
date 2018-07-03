<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFlexibleSeatingHostRoutingPoliciesGetResponse
 *
 * Response to the GroupFlexibleSeatingHostRoutingPoliciesGetRequest.
 *
 * @see GroupFlexibleSeatingHostRoutingPoliciesGetRequest
 */
class GroupFlexibleSeatingHostRoutingPoliciesGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

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

