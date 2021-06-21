<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterModifyAgentListRequest
 *
 * Request to modify the agent list for a call center.
 *         The response is either SuccessResponse or ErrorResponse.
 *         If the agentUserIdList is used for Skill Based Premium call centers, 
 *         the agents will be set to skill level 1.
 *         
 *         The following element is only used in AS data mode and ignored in XS data mode:
 *           skilledAgentUserIdList
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:4995","type":"sequence","children":[{"id":"e2c537e3e39483b96620673a7012ffdd:4997","type":"choice"}]}]
 */
class GroupCallCenterModifyAgentListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceUserId
     * @Type string
     * @Group e2c537e3e39483b96620673a7012ffdd:4995
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $serviceUserId = null;

    /**
     * @ElementName agentUserIdList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList
     * @Nillable
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:4997
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $agentUserIdList = null;

    /**
     * @ElementName skilledAgentUserIdList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReplacementSkilledAgents
     * @Array
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:4997
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReplacementSkilledAgents[]
     */
    private $skilledAgentUserIdList = array(
        
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
     * Getter for agentUserIdList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null
     */
    public function getAgentUserIdList()
    {
        return $this->agentUserIdList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->agentUserIdList;
    }

    /**
     * Setter for agentUserIdList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList|null $agentUserIdList
     * @return $this
     */
    public function setAgentUserIdList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementUserIdList $agentUserIdList = null)
    {
        if ($agentUserIdList === null) {
            $this->agentUserIdList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->agentUserIdList = $agentUserIdList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAgentUserIdList()
    {
        $this->agentUserIdList = null;
        return $this;
    }

    /**
     * Getter for skilledAgentUserIdList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReplacementSkilledAgents[]
     */
    public function getSkilledAgentUserIdList()
    {
        return $this->skilledAgentUserIdList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->skilledAgentUserIdList;
    }

    /**
     * Setter for skilledAgentUserIdList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReplacementSkilledAgents[] $skilledAgentUserIdList
     * @return $this
     */
    public function setSkilledAgentUserIdList(array $skilledAgentUserIdList)
    {
        $this->skilledAgentUserIdList = $skilledAgentUserIdList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSkilledAgentUserIdList()
    {
        $this->skilledAgentUserIdList = null;
        return $this;
    }

    /**
     * Adder for skilledAgentUserIdList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReplacementSkilledAgents $skilledAgentUserIdList
     * @return $this
     */
    public function addSkilledAgentUserIdList($skilledAgentUserIdList)
    {
        $this->skilledAgentUserIdList[] = $skilledAgentUserIdList;
        return $this;
    }


}

