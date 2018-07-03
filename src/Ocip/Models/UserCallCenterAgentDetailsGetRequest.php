<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterAgentDetailsGetRequest
 *
 * Request to get the detail information of a Call Center Agent. Administrator,
 * supervisor and agent
 *         itself can send this command.
 *         The response is either UserCallCenterAgentDetailsGetResponse or
 * ErrorResponse.
 *
 * @see UserCallCenterAgentDetailsGetResponse
 * @see ErrorResponse
 */
class UserCallCenterAgentDetailsGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

