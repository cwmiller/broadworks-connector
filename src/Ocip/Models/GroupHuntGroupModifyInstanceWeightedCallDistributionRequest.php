<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupHuntGroupModifyInstanceWeightedCallDistributionRequest
 *
 * Request to modify the weighted call distribution of a Hunt Group instance.
 *         The response is either SuccessResponse or ErrorResponse.
 *         NOTE: Prior to release 14, any agents who were not in the list kept
 * their
 *         existing weight setting. In release 14, any agents who are not in the
 * list
 *         will have their weight set to 0.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupHuntGroupModifyInstanceWeightedCallDistributionRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName agentWeight
     * @var \CWM\BroadWorksConnector\Ocip\Models\HuntAgentWeight[]
     */
    private $agentWeight = array(
        
    );

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
     * Getter for agentWeight
     *
     * @ElementName agentWeight
     * @return \CWM\BroadWorksConnector\Ocip\Models\HuntAgentWeight[]
     */
    public function getAgentWeight()
    {
        return $this->agentWeight;
    }

    /**
     * Setter for agentWeight
     *
     * @ElementName agentWeight
     * @param \CWM\BroadWorksConnector\Ocip\Models\HuntAgentWeight[] $agentWeight
     * @return $this
     */
    public function setAgentWeight($agentWeight)
    {
        $this->agentWeight = $agentWeight;
        return $this;
    }

    /**
     * Adder for agentWeight
     *
     * @ElementName agentWeight
     * @param \CWM\BroadWorksConnector\Ocip\Models\HuntAgentWeight $agentWeight
     * @return $this
     */
    public function addAgentWeight($agentWeight)
    {
        $this->agentWeight []= $agentWeight;
        return $this;
    }


}

