<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterModifyAgentListRequest
 *
 * Request to modify the agent list for a call center.
 *         The response is either SuccessResponse or ErrorResponse.
 *         If the agentUserIdList is used for Skill Based Premium call centers, 
 *         the agents will be set to skill level 1.
 */
class GroupCallCenterModifyAgentListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName agentUserIdList
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    private $agentUserIdList = null;

    /**
     * @ElementName skilledAgentUserIdList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReplacementSkilledAgents[]
     */
    private $skilledAgentUserIdList = array(
        
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
     * Getter for agentUserIdList
     *
     * @ElementName agentUserIdList
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    public function getAgentUserIdList()
    {
        return $this->agentUserIdList;
    }

    /**
     * Setter for agentUserIdList
     *
     * @ElementName agentUserIdList
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null $agentUserIdList
     * @return $this
     */
    public function setAgentUserIdList($agentUserIdList)
    {
        $this->agentUserIdList = $agentUserIdList;
        return $this;
    }

    /**
     * Getter for skilledAgentUserIdList
     *
     * @ElementName skilledAgentUserIdList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReplacementSkilledAgents[]
     */
    public function getSkilledAgentUserIdList()
    {
        return $this->skilledAgentUserIdList;
    }

    /**
     * Setter for skilledAgentUserIdList
     *
     * @ElementName skilledAgentUserIdList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReplacementSkilledAgents[] $skilledAgentUserIdList
     * @return $this
     */
    public function setSkilledAgentUserIdList($skilledAgentUserIdList)
    {
        $this->skilledAgentUserIdList = $skilledAgentUserIdList;
        return $this;
    }

    /**
     * Adder for skilledAgentUserIdList
     *
     * @ElementName skilledAgentUserIdList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReplacementSkilledAgents $skilledAgentUserIdList
     * @return $this
     */
    public function addSkilledAgentUserIdList($skilledAgentUserIdList)
    {
        $this->skilledAgentUserIdList []= $skilledAgentUserIdList;
        return $this;
    }


}
