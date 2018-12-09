<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterModifyInstanceWeightedCallDistributionRequest
 *
 * Request to modify the weighted call distribution of a Call Center instance.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"3ac5f05d969bc771d6ba8d344d95aa72:4676","type":"sequence"}]
 */
class GroupCallCenterModifyInstanceWeightedCallDistributionRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:4676
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName agentWeight
     * @Type \CWM\BroadWorksConnector\Ocip\Models\HuntAgentWeight
     * @Array
     * @Optional
     * @Group 3ac5f05d969bc771d6ba8d344d95aa72:4676
     * @var \CWM\BroadWorksConnector\Ocip\Models\HuntAgentWeight[]
     */
    private $agentWeight = array(
        
    );

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
     * Getter for agentWeight
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\HuntAgentWeight[]
     */
    public function getAgentWeight()
    {
        return $this->agentWeight instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentWeight;
    }

    /**
     * Setter for agentWeight
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\HuntAgentWeight[] $agentWeight
     * @return $this
     */
    public function setAgentWeight(array $agentWeight)
    {
        $this->agentWeight = $agentWeight;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgentWeight()
    {
        $this->agentWeight = null;
        return $this;
    }

    /**
     * Adder for agentWeight
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\HuntAgentWeight $agentWeight
     * @return $this
     */
    public function addAgentWeight($agentWeight)
    {
        $this->agentWeight[] = $agentWeight;
        return $this;
    }


}

