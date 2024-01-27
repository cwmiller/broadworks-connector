<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallCenterAddSupervisedAgentListRequest
 *
 * Assign agent(s) to a call center supervisor.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:6603","type":"sequence"}]
 */
class UserCallCenterAddSupervisedAgentListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName supervisorUserId
     * @Type string
     * @Group 4d65d3449061c568639c8cc1e2492285:6603
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $supervisorUserId = null;

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 4d65d3449061c568639c8cc1e2492285:6603
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $serviceUserId = null;

    /**
     * @ElementName agentUserId
     * @Type string
     * @Array
     * @Group 4d65d3449061c568639c8cc1e2492285:6603
     * @MinLength 1
     * @MaxLength 161
     * @var string[]
     */
    protected $agentUserId = [
        
    ];

    /**
     * Getter for supervisorUserId
     *
     * @return string
     */
    public function getSupervisorUserId()
    {
        return $this->supervisorUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->supervisorUserId;
    }

    /**
     * Setter for supervisorUserId
     *
     * @param string $supervisorUserId
     * @return $this
     */
    public function setSupervisorUserId($supervisorUserId)
    {
        $this->supervisorUserId = $supervisorUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSupervisorUserId()
    {
        $this->supervisorUserId = null;
        return $this;
    }

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
     * Getter for agentUserId
     *
     * @return string[]
     */
    public function getAgentUserId()
    {
        return $this->agentUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentUserId;
    }

    /**
     * Setter for agentUserId
     *
     * @param string[] $agentUserId
     * @return $this
     */
    public function setAgentUserId(array $agentUserId)
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

    /**
     * Adder for agentUserId
     *
     * @param string $agentUserId
     * @return $this
     */
    public function addAgentUserId(string $agentUserId)
    {
        $this->agentUserId[] = $agentUserId;
        return $this;
    }
}

