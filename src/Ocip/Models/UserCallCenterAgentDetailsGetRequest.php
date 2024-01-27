<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterAgentDetailsGetRequest
 *
 * Request to get the detail information of a Call Center Agent. Administrator, supervisor and agent
 *         itself can send this command.
 *         The response is either UserCallCenterAgentDetailsGetResponse or ErrorResponse.
 *
 * @see UserCallCenterAgentDetailsGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:6622","type":"sequence"}]
 */
class UserCallCenterAgentDetailsGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName agentUserId
     * @Type string
     * @Group 4d65d3449061c568639c8cc1e2492285:6622
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $agentUserId = null;

    /**
     * Getter for agentUserId
     *
     * @return string
     */
    public function getAgentUserId()
    {
        return $this->agentUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentUserId;
    }

    /**
     * Setter for agentUserId
     *
     * @param string $agentUserId
     * @return $this
     */
    public function setAgentUserId($agentUserId)
    {
        $this->agentUserId = $agentUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgentUserId()
    {
        $this->agentUserId = null;
        return $this;
    }
}

