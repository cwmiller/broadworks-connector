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
     * @Type bool
     * @var bool|null
     */
    private $allowEmergencyCalls = null;

    /**
     * @ElementName allowCallsToVoicePortal
     * @Type bool
     * @var bool|null
     */
    private $allowCallsToVoicePortal = null;

    /**
     * Getter for allowEmergencyCalls
     *
     * @return bool
     */
    public function getAllowEmergencyCalls()
    {
        return $this->allowEmergencyCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowEmergencyCalls;
    }

    /**
     * Setter for allowEmergencyCalls
     *
     * @param bool $allowEmergencyCalls
     * @return $this
     */
    public function setAllowEmergencyCalls($allowEmergencyCalls)
    {
        $this->allowEmergencyCalls = $allowEmergencyCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowEmergencyCalls()
    {
        $this->allowEmergencyCalls = null;
        return $this;
    }

    /**
     * Getter for allowCallsToVoicePortal
     *
     * @return bool
     */
    public function getAllowCallsToVoicePortal()
    {
        return $this->allowCallsToVoicePortal instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowCallsToVoicePortal;
    }

    /**
     * Setter for allowCallsToVoicePortal
     *
     * @param bool $allowCallsToVoicePortal
     * @return $this
     */
    public function setAllowCallsToVoicePortal($allowCallsToVoicePortal)
    {
        $this->allowCallsToVoicePortal = $allowCallsToVoicePortal;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowCallsToVoicePortal()
    {
        $this->allowCallsToVoicePortal = null;
        return $this;
    }


}

