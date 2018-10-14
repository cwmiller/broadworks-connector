<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterDeleteSupervisedAgentListRequest
 *
 * Delete agent(s) from a call center supervisor.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserCallCenterDeleteSupervisedAgentListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName supervisorUserId
     * @var string|null
     */
    private $supervisorUserId = null;

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName agentUserId
     * @var string[]
     */
    private $agentUserId = array(
        
    );

    /**
     * Getter for supervisorUserId
     *
     * @ElementName supervisorUserId
     * @return string|null
     */
    public function getSupervisorUserId()
    {
        return $this->supervisorUserId;
    }

    /**
     * Setter for supervisorUserId
     *
     * @ElementName supervisorUserId
     * @param string|null $supervisorUserId
     * @return $this
     */
    public function setSupervisorUserId($supervisorUserId)
    {
        $this->supervisorUserId = $supervisorUserId;
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

    /**
     * Getter for agentUserId
     *
     * @ElementName agentUserId
     * @return string[]
     */
    public function getAgentUserId()
    {
        return $this->agentUserId;
    }

    /**
     * Setter for agentUserId
     *
     * @ElementName agentUserId
     * @param string[] $agentUserId
     * @return $this
     */
    public function setAgentUserId(array $agentUserId)
    {
        $this->agentUserId = $agentUserId;
        return $this;
    }

    /**
     * Adder for agentUserId
     *
     * @ElementName agentUserId
     * @param string $agentUserId
     * @return $this
     */
    public function addAgentUserId(string $agentUserId)
    {
        $this->agentUserId []= $agentUserId;
        return $this;
    }


}

