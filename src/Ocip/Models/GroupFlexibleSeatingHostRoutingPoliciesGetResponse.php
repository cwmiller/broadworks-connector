<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFlexibleSeatingHostRoutingPoliciesGetResponse
 *
 * Response to the GroupFlexibleSeatingHostRoutingPoliciesGetRequest.
 *
 * @see GroupFlexibleSeatingHostRoutingPoliciesGetRequest
 * @Groups [{"id":"43afb2158d313a1d1a148124d7caba1e:329","type":"sequence"}]
 */
class GroupFlexibleSeatingHostRoutingPoliciesGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName allowEmergencyCalls
     * @Type bool
     * @Group 43afb2158d313a1d1a148124d7caba1e:329
     * @var bool|null
     */
    protected $allowEmergencyCalls = null;

    /**
     * @ElementName allowCallsToVoicePortal
     * @Type bool
     * @Group 43afb2158d313a1d1a148124d7caba1e:329
     * @var bool|null
     */
    protected $allowCallsToVoicePortal = null;

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

