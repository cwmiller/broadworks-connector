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
 * @Groups [{"id":"43afb2158d313a1d1a148124d7caba1e:345","type":"sequence"}]
 */
class GroupFlexibleSeatingHostRoutingPoliciesModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 43afb2158d313a1d1a148124d7caba1e:345
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName allowEmergencyCalls
     * @Type bool
     * @Optional
     * @Group 43afb2158d313a1d1a148124d7caba1e:345
     * @var bool|null
     */
    private $allowEmergencyCalls = null;

    /**
     * @ElementName allowCallsToVoicePortal
     * @Type bool
     * @Optional
     * @Group 43afb2158d313a1d1a148124d7caba1e:345
     * @var bool|null
     */
    private $allowCallsToVoicePortal = null;

    /**
     * Getter for serviceUserId
     *
     * @return string
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceUserId;
    }

    /**
     * Setter for serviceUserId
     *
     * @param string $serviceUserId
     * @return $this
     */
    public function setServiceUserId($serviceUserId)
    {
        $this->serviceUserId = $serviceUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceUserId()
    {
        $this->serviceUserId = null;
        return $this;
    }

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

