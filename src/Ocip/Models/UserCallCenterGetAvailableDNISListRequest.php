<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterGetAvailableDNISListRequest
 *
 * Request a list of available DNIS for agent to select.
 *         The response is either UserCallCenterGetAvailableDNISListResponse or
 * ErrorResponse.
 */
class UserCallCenterGetAvailableDNISListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName agentUserId
     * @var string|null
     */
    private $agentUserId = null;

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


}

