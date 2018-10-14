<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterAddAgentListRequest
 *
 * Add agent(s) to a call center.
 *         The response is either SuccessResponse or ErrorResponse.
 *         If the skill level is not present for skill based premium call centers,
 * the users will be set to skill level 1.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class GroupCallCenterAddAgentListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

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
     * @ElementName agentSkillList
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterSkillAgentList[]
     */
    private $agentSkillList = array(
        
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

    /**
     * Getter for agentSkillList
     *
     * @ElementName agentSkillList
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterSkillAgentList[]
     */
    public function getAgentSkillList()
    {
        return $this->agentSkillList;
    }

    /**
     * Setter for agentSkillList
     *
     * @ElementName agentSkillList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterSkillAgentList[] $agentSkillList
     * @return $this
     */
    public function setAgentSkillList(array $agentSkillList)
    {
        $this->agentSkillList = $agentSkillList;
        return $this;
    }

    /**
     * Adder for agentSkillList
     *
     * @ElementName agentSkillList
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterSkillAgentList $agentSkillList
     * @return $this
     */
    public function addAgentSkillList($agentSkillList)
    {
        $this->agentSkillList []= $agentSkillList;
        return $this;
    }


}

