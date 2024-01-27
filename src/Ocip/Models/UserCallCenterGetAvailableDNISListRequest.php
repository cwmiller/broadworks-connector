<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterGetAvailableDNISListRequest
 *
 * Request a list of available DNIS for agent to select.
 *         The response is either UserCallCenterGetAvailableDNISListResponse or ErrorResponse.
 *
 * @see UserCallCenterGetAvailableDNISListResponse
 * @see ErrorResponse
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:7019","type":"sequence"}]
 */
class UserCallCenterGetAvailableDNISListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName agentUserId
     * @Type string
     * @Group 4d65d3449061c568639c8cc1e2492285:7019
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

