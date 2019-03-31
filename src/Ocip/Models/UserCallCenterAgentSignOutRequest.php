<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterAgentSignOutRequest
 *
 * This request signs-out a call center agent. Administrator, supervisor and agent itself can sign-out an agent. 
 *         An empty OCI table in OCI-P response indicates success and the agent has been signed out. This sign-out 
 *         command will fail if the agent is the last signed-in agent of any standard or premium call center to 
 *         which she is currently joined. If the sign-out fails, the OCI-P response will contain a list of 
 *         Call Centers for which the agent is the last signed-in agent. 
 *         If this special logic is not needed, UserCallCenterModifyRequest19 can still be used to change 
 *         the agents ACD state without checking if the agent is the last signed-in agent.
 *         The response is either a UserCallCenterAgentSignOutResponse or ErrorResponse.
 *
 * @see UserCallCenterModifyRequest19
 * @see UserCallCenterAgentSignOutResponse
 * @see ErrorResponse
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:6655","type":"sequence"}]
 */
class UserCallCenterAgentSignOutRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName agentUserId
     * @Type string
     * @Group e2c537e3e39483b96620673a7012ffdd:6655
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $agentUserId = null;

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

