<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterGetAgentSupervisorListRequest
 *
 * Get a list of supervisors for an agent on a given call center.
 *         The response is either a UserCallCenterGetAgentSupervisorListResponse
 *         or an ErrorResponse.
 */
class UserCallCenterGetAgentSupervisorListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName agentUserId
     * @var string|null
     */
    private $agentUserId = null;

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * Getter for agentUserId
     *
     * @ElementName agentUserId
     * @return string|null
     */
    public function getAgentUserId()
    {
        return $this->agentUserId;
    }

    /**
     * Setter for agentUserId
     *
     * @ElementName agentUserId
     * @param string|null $agentUserId
     * @return $this
     */
    public function setAgentUserId($agentUserId)
    {
        $this->agentUserId = $agentUserId;
        return $this;
    }

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


}

